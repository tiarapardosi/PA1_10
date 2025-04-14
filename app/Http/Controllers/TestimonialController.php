<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials (for admin).
     *
     * @return View
     */
    public function index(): View
    {
        // Ambil semua testimonial dengan pagination (misalnya, 10 per halaman)
        $testimonials = Testimonial::latest()->paginate(10);

        // Kirim data testimonial ke view 'testimonials.index' (untuk admin)
        return view('testimonials.index', compact('testimonials'));
    }

    /**
     * Display a listing of approved testimonials for public users.
     *
     * @return View
     */
    public function indexPublic(): View
    {
        // Ambil semua testimonial yang statusnya 'approved'
        $testimonials = Testimonial::latest()->paginate(10);

        // Kirim data testimonial ke view 'testimonials.indexPublic'
        return view('testimonials.indexPublic', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial (for users).
     *
     * @return View
     */
    public function create(): View
    {
        // Menampilkan form untuk membuat testimonial baru (untuk pengguna)
        return view('testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'your_name' => 'required|string|max:255', // Sesuaikan dengan nama input di form
            'your_email' => 'required|email|max:255', // Sesuaikan dengan nama input di form
            'subject' => 'required|string|max:255',   // Sesuaikan dengan nama input di form
            'message' => 'required|string',           // Sesuaikan dengan nama input di form
        ]);

        // Jika validasi gagal, kembali ke form dengan error dan input lama
        if ($validator->fails()) {
            return Redirect::route('testimonials.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan data ke database
        try {
            Testimonial::create([
                'name' => $request->input('your_name'), // Sesuaikan dengan nama input di form
                'email' => $request->input('your_email'), // Sesuaikan dengan nama input di form
                'subject' => $request->input('subject'),   // Sesuaikan dengan nama input di form
                'message' => $request->input('message'),   // Sesuaikan dengan nama input di form
                'status' => 'pending', // Status default (pastikan ada di $fillable)
            ]);

            // Redirect ke halaman "thank you" atau halaman testimonial
            return Redirect::route('testimonials.indexPublic')->with('success', 'Terima kasih! Testimonial Anda telah berhasil dikirim dan akan segera diproses.');  // Redirect ke halaman yang sesuai untuk pengguna

        } catch (\Exception $e) {
            // Tangani error jika gagal menyimpan ke database
            Log::error('Gagal menyimpan testimonial: ' . $e->getMessage());
            return Redirect::route('testimonials.create')
                ->with('error', 'Terjadi kesalahan saat menyimpan testimonial. Silakan coba lagi.')
                ->withInput();
        }
    }

    /**
     * Display the specified testimonial (for admin).
     *
     * @param  Testimonial  $testimonial
     * @return View
     */
    public function show(Testimonial $testimonial): View
    {
        // Tampilkan detail testimonial (untuk admin)
        return view('testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified testimonial (for admin).
     *
     * @param  Testimonial  $testimonial
     * @return View
     */
    public function edit(Testimonial $testimonial): View
    {
        // Tampilkan form untuk mengedit testimonial (untuk admin)
        return view('testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage (for admin).
     *
     * @param  Request  $request
     * @param  Testimonial  $testimonial
     * @return RedirectResponse
     */
    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        // Validasi data input
        $validator = Validator::make($request->all(), [
            'your_name' => 'required|string|max:255', // Sesuaikan dengan nama input di form
            'your_email' => 'required|email|max:255', // Sesuaikan dengan nama input di form
            'subject' => 'required|string|max:255',   // Sesuaikan dengan nama input di form
            'message' => 'required|string',           // Sesuaikan dengan nama input di form
            'status' => 'required|in:pending,approved,rejected', // Validasi status
        ]);

        // Jika validasi gagal, kembali ke form edit dengan error
        if ($validator->fails()) {
            return Redirect::route('testimonials.edit', $testimonial->id)
                ->withErrors($validator)
                ->withInput();
        }

        // Update data di database
        try {
            $testimonial->update([
                'name' => $request->input('your_name'), // Sesuaikan dengan nama input di form
                'email' => $request->input('your_email'), // Sesuaikan dengan nama input di form
                'subject' => $request->input('subject'),   // Sesuaikan dengan nama input di form
                'message' => $request->input('message'),   // Sesuaikan dengan nama input di form
                'status' => $request->input('status'),
            ]);

            // Redirect ke halaman index (untuk admin) dengan pesan sukses
            return Redirect::route('testimonials.index')->with('success', 'Testimonial berhasil diperbarui.');

        } catch (\Exception $e) {
            // Tangani error jika gagal memperbarui di database
            Log::error('Gagal memperbarui testimonial: ' . $e->getMessage());
            return Redirect::route('testimonials.edit', $testimonial->id)
                ->with('error', 'Terjadi kesalahan saat memperbarui testimonial. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified testimonial from storage (for admin).
     *
     * @param  Testimonial  $testimonial
     * @return RedirectResponse
     */
    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        // Hapus testimonial dari database
        try {
            $testimonial->delete();

            // Redirect ke halaman index (untuk admin) dengan pesan sukses
            return Redirect::route('testimonials.index')->with('success', 'Testimonial berhasil dihapus.');

        } catch (\Exception $e) {
            // Tangani error jika gagal menghapus dari database
            Log::error('Gagal menghapus testimonial: ' . $e->getMessage());
            return Redirect::route('testimonials.index')->with('error', 'Terjadi kesalahan saat menghapus testimonial. Silakan coba lagi.');
        }
    }
}
