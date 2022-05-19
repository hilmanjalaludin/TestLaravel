@extends('master')
    @section('konten')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                       

                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                {{-- {{dd($post)}} --}}
                                <tr>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->email }}</td>
                                    <td>{{ $post->comment }}</td>
                                    
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
