<footer class="container-fluid p-5 bg-secondary mt-4">
    <div class="row row-cols-4">
        @foreach ($footerLinks as $single_footer_link => $links)
            <div class="col text-white">
                <ul>
                    <li>
                        <h4>{{ $single_footer_link }}</h4>
                    </li>
                    @foreach ($links as $single_footer_link)
                        <li>
                            <a href="#">
                                <h6>{{ $single_footer_link }}</h6>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        <div class="col text-white">
            <img class="img-fluid img-footer" src="https://pngimg.com/d/pokemon_PNG107.png" alt="Pokémon">
            <p class="p-2 bg-warning rounded-2 text-black fw-bold text-center">
                Created with love &#10084;
            </p>
        </div>
    </div>

    </div>
</footer>
