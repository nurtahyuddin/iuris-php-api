<?php

namespace App\Http\Controllers;

use App\Models\LegalCase;
use Illuminate\Http\Request;

class LegalCaseController extends Controller
{
    // 1. Ambil Semua Data (GET /api/cases)
    public function index()
    {
        return response()->json(LegalCase::all(), 200);
    }

    // 2. Ambil Satu Data (GET /api/cases/{id})
    public function show($id)
    {
        $case = LegalCase::find($id);
        if (!$case) {
            return response()->json(['message' => 'Kasus tidak ditemukan'], 404);
        }
        return response()->json($case, 200);
    }

    // 3. Tambah Data Baru (POST /api/cases)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|integer',
            'lawyer_id' => 'nullable|integer',
            'case_title' => 'required|string|max:255',
            'case_description' => 'nullable|string',
            'status' => 'nullable|string'
        ]);

        $case = LegalCase::create($validated);
        return response()->json($case, 201);
    }

    // 4. Update Data (PUT /api/cases/{id})
    public function update(Request $request, $id)
    {
        $case = LegalCase::find($id);
        if (!$case) {
            return response()->json(['message' => 'Kasus tidak ditemukan'], 404);
        }

        $case->update($request->all());
        return response()->json($case, 200);
    }

    // 5. Hapus Data (DELETE /api/cases/{id})
    public function destroy($id)
    {
        $case = LegalCase::find($id);
        if (!$case) {
            return response()->json(['message' => 'Kasus tidak ditemukan'], 404);
        }

        $case->delete();
        return response()->json(['message' => 'Kasus berhasil dihapus'], 200);
    }
}