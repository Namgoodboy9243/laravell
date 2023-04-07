    @extends('layouts.master')
    @section('main')
        <div class="jumbotron">
            <div class="container">
                <h1>Danh mục</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->status == 0 ? 'Tạm ẩn' : 'Hiển thị' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <p>
                    <a class="btn btn-primary btn-lg">Learn more</a>
                </p>
                {{ $category->links() }}
            </div>
        </div>
    @stop()
