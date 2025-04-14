<!DOCTYPE html>
<html>
<head>
    <title>Beri Ulasan</title>
    <!-- Tambahkan CSS Anda -->
    <style>
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
        .form-group { margin-bottom: 1rem; }
        .form-control { display: block; width: 100%; padding: 0.375rem 0.75rem; /* ... styling lainnya */ }
        .invalid-feedback { color: #dc3545; display: block; } /* Tampilkan pesan error */
        /* Styling dasar agar mirip gambar */
        body { font-family: sans-serif; background-color: #f0f4f7; display: flex; justify-content: center; align-items: center; min-height: 100vh;}
        .container { background-color: #fff; padding: 40px; border-radius: 8px; max-width: 600px; width: 100%; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;}
        h2 { color: #f39c12; font-size: 2.5em; margin-bottom: 10px; }
        .review-label { color: #f39c12; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px; display: block; }
        .form-row { display: flex; gap: 15px; margin-bottom: 15px; }
        .form-row .form-group { flex: 1; }
        input[type="text"], input[type="email"], textarea {
            border: 1px solid #ccc;
            padding: 10px 15px;
            border-radius: 4px;
            width: calc(100% - 30px); /* Adjust for padding */
        }
         textarea { height: 150px; resize: vertical; }
        button { background-color: #f39c12; color: white; border: none; padding: 15px 30px; border-radius: 5px; cursor: pointer; font-size: 1em; text-transform: uppercase; }
        button:hover { background-color: #e68a00; }
    </style>
</head>
<body>
    <div class="container">

        <span class="review-label">review</span>
        <h2>Bantu Kami Lebih Baik – Tulis Ulasanmu</h2>

        {{-- Tampilkan Pesan Sukses --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tampilkan Pesan Error Umum (jika ada) --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('testimonials.store') }}">
            @csrf {{-- Token Keamanan Laravel --}}

            <div class="form-row">
                 <div class="form-group">
                    {{-- <label for="your_name">Your Name</label> --}}
                    <input type="text" id="your_name" name="your_name" class="form-control @error('your_name') is-invalid @enderror" value="{{ old('your_name') }}" required placeholder="Your Name">
                    @error('your_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                   {{-- <label for="your_email">Your Email</label> --}}
                    <input type="email" id="your_email" name="your_email" class="form-control @error('your_email') is-invalid @enderror" value="{{ old('your_email') }}" required placeholder="Your Email">
                     @error('your_email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                {{-- <label for="subject">Subject</label> --}}
                <input type="text" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" required placeholder="Subject">
                 @error('subject')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                {{-- <label for="message">Message</label> --}}
                <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" required placeholder="Message">{{ old('message') }}</textarea>
                 @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">SEND MESSAGE</button>
        </form>
    </div>
</body>
</html>
