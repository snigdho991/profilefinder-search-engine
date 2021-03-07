<!--Alert start -->
@if ($message = Session::get('success'))
<section id="alerts-closable">
    

    <div class="demo-spacing-0 mb-2">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="alert-body">
                <strong>Success!</strong>
                {{ $message }}
            </div>
            
        </div>
    </div>
                
</section>
@endif
<!-- Alert end -->

<!--Alert start -->
@if (count($errors) > 0)
<section id="alerts-closable">
    

    <div class="demo-spacing-0 mb-2">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="alert-body">
                <strong>Whoops!</strong> There were some problems with your input.<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        </div>
    </div>
                
</section>
@endif
<!-- Alert end -->