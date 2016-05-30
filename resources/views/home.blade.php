@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    {{--Another Generic Welcome Message--}}
                    <?php foreach($barang as $bar) { ?>
                    <li>
                        <a href="#">
                            <?php echo $bar->barang_nama ?>
                        </a>
                    </li>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
