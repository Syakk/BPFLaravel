@extends('Layout.admin.app')

@section('content')
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Data User</h1>
            <p class="mb-0">List data seluruh user</p>
        </div>
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-success text-white">Tambah User</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0">NAME</th>
                                <th class="border-0">EMAIL</th>
                                <th class="border-0">PASSWORD</th>
                                <th class="border-0 rounded-end">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataUser as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td><code class="text-muted">{{ Str::limit($item->password, 25) }}</code></td>
                                    <td>
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('user.destroy', $item->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection