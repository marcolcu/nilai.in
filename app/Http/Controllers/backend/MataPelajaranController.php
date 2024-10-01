<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\KelasDetail;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    //
    public function index()
    {

        $matapelajarans = MataPelajaran::all();

        return response()->json([
            'matapelajarans: ' => $matapelajarans,
        ], 200);
    }

    public function materiSyncKelas()
    {
        $mataPelajaranKelas = MataPelajaran::join('kelasdetails', 'matapelajarans.id', '=', 'kelasdetails.IDMataPelajaran')->join('kelases', 'kelases.id', '=', 'kelasdetails.IDKelas')
            ->get();

        return response()->json([
            'mataPelajaranKelas: ' => $mataPelajaranKelas,
        ], 200);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
            'tingkat' => ['required'],
            'IDKelas' => ['required'], // pastikan kelas/jurusan ada di request
        ]);

        $matapelajaran = new MataPelajaran();
        $matapelajaran->nama = $input['nama'];
        $matapelajaran->deskripsi = $input['deskripsi'];

        if ($matapelajaran->save()) {
            $idMapel = $matapelajaran->id;

            // Cari kelas berdasarkan tingkat dan IDKelas
            $kelas = Kelas::where('tingkat', $input['tingkat'])
                ->where('jurusan', strtolower($input['IDKelas'])) // gunakan IDKelas dari request
                ->first();

            if ($kelas) {
                // Buat KelasDetail baru
                $kelasdetail = new KelasDetail();
                $kelasdetail->IDMataPelajaran = $idMapel;
                $kelasdetail->IDKelas = $kelas->id;
                $kelasdetail->save();
            } else {
                // Jika tidak ada kelas yang cocok
                return response()->json([
                    'Message' => 'No matching class found for the given tingkat and jurusan.',
                ], 400);
            }

            return response()->json([
                'Message' => 'Success!',
                'matapelajaran created' => $matapelajaran
            ], 200);
        } else {
            return response()->json([
                'Message' => 'We could not create a new matapelajaran.'
            ], 500);
        }
    }

    public function show(string $id)
    {
        $matapelajaran = matapelajaran::join('kelasdetails', 'matapelajarans.id', '=', 'kelasdetails.IDMataPelajaran')
            ->join('kelases', 'kelases.id', '=', 'kelasdetails.IDKelas')
            ->where('matapelajarans.id', '=', $id)
            ->select('matapelajarans.id AS id_mapel', 'matapelajarans.nama AS nama', 'matapelajarans.deskripsi AS deskripsi',
                'kelases.id AS id_kelas', 'kelases.tingkat AS tingkat', 'kelases.jurusan AS jurusan', 'kelases.wali AS wali_kelas', 'kelases.ketua AS ketua_kelas')
            ->first();

        if ($matapelajaran) {
            return response()->json([
                'Message: ' => 'matapelajarans found.',
                'matapelajaran: ' => $matapelajaran
            ], 200);

        } else {
            return response([
                'Message: ' => 'We could not find the matapelajaran.',
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        $matapelajaran = MataPelajaran::find($id);

        if ($matapelajaran) {
            $input = $request->validate([
                'nama' => ['required'],
                'deskripsi' => ['required'],
                'tingkat' => ['required'],
            ]);

            $matapelajaran->nama = $input['nama'];
            $matapelajaran->deskripsi = $input['deskripsi'];

            if ($matapelajaran->save()) {
                if ($request->jurusan) {
                    $jurusan = strtolower($request->jurusan);
                    $kelasdetails = KelasDetail::where('IDMataPelajaran', $id)->get();
                    $kelas = Kelas::where('tingkat', $input['tingkat'])->where('jurusan', $jurusan)->first();
                    foreach ($kelasdetails as $detail) {
                        $detail->delete();
                    }

                    $kelasdetail = new KelasDetail();

                    $kelasdetail->IDMataPelajaran = $matapelajaran->id;
                    $kelasdetail->IDKelas = $kelas->id;

                    $kelasdetail->save();
                } else {
                    $kelasdetails = KelasDetail::where('IDMataPelajaran', $id)->get();
                    foreach ($kelasdetails as $detail) {
                        $detail->delete();
                    }

                    $kelases = Kelas::where('tingkat', $input['tingkat'])->get();
                    foreach ($kelases as $kelas) {
                        $kelasdetail = new KelasDetail();

                        $kelasdetail->IDMataPelajaran = $id;
                        $kelasdetail->IDKelas = $kelas->id;

                        $kelasdetail->save();
                    }
                }
                return response()->json([
                    'Message: ' => 'Successfully updated!',
                    'matapelajaran created: ' => $matapelajaran
                ], 200);
            } else {
                return response(['Message: ' => 'We could not update the matapelajaran.'], 500);
            }
        } else {
            return response([
                'Message: ' => 'We could not find the matapelajaran.',
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        $matapelajaran = matapelajaran::find($id);

        if ($matapelajaran) {
            if ($matapelajaran->delete()) {
                return response()->json([
                    'Message: ' => 'Successfully deleted!'
                ], 200);
            } else {
                return response(['Message: ' => 'We could not deleted the matapelajaran.'], 500);
            }
        } else {

            return response([
                'Message: ' => 'We could not find the matapelajaran.',
            ], 500);
        }
    }
}
