@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Programs</h1>
        </div>




    </div>
    <div id="Programs" class="container-fluid">

    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')
    <script>
        const editor_themes = JSON.parse('{!! json_encode($themes) !!}');
        const editor_syntaxes = JSON.parse('{!! json_encode($syntaxes) !!}');
    </script>
@endsection
