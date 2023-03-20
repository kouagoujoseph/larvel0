@extends('layout_voiture.master')
@section('content')
    <div class="main-container">
         <div class="py-3 form-content d-flex justify-content-center position-relative align-items-center offset-3 col-6">

                <form action="" method="POST"
                    class=" d-flex justify-content-center flex-column align-items-center position-relative"
                    id="form-contact">
                    @csrf
                    <div class="position-absolute div-info-plus" style="z-index:-100;">
                        .
                    </div>

                    <input type="text" class="form-control" name="nom" placeholder="Nom & Prénom" required>
                    @if ($errors->has('nom'))
                    <span class="text-danger">{{ $errors->first('nom') }}</span>
                    @endif

                    <input type="email" class="form-control mt-3" name="email" placeholder="Email" required>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                    <textarea name="message" class="form-control mt-3" placeholder="Message" required></textarea>
                    @if ($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                    <button type="submit"
                        class=" btn px-3 btn-lg mt-3 text-black bg-bbcar-color  btn-submit-contact ">Envoyer</button>
                </form>
            </div>
            <br><br>
            <form action="/" class="">
                <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
            </form>
    </div>
@endsection