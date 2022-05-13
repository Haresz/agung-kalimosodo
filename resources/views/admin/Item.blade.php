@extends('partials.navmin')

@section('container')
    <div class="detail">
        <img src="{{ "$detail" }}" alt="" width="400px">
        <section>
            <h2>Name Product</h2>
            <hr>
            <ul>
                <p>
                    <li>Category : Name Category</li>
                <br>
                <li>Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore facilis aspernatur cum esse velit doloribus aut omnis, ad corporis nostrum tempora sed saepe, vel voluptatem praesentium sequi! Tempore dolores nobis sequi ut quasi ipsa totam adipisci omnis culpa, sint, obcaecati at facilis fugiat cum ullam, iusto voluptatum magni iure voluptates?</li>
                <br>
                <li>Code Product : A01</li>
                <br>
                <li>
                    <span>Contact Person</span>
                    <li><i class="fa-brands fa-whatsapp item3"></i> +6281 326 341 451</li>
                    <li><i class="fa-solid fa-square-phone-flip  item3"></i> +6281 215 563 65</li>
                </li>
                </p>
            </ul>
        </section>
    </div>
@endsection
