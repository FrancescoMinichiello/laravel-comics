<header class="container-fluid bg-primary d-flex justify-content-center mb-4">
    <div class="row">
        <div class="col">
            <nav class="d-flex">
                <div class="row p-3">
                    <div class="col">
                        <ul class="d-flex gap-4 align-items-center">
                            <li><img class="logo"
                                    src="https://static.vecteezy.com/system/resources/previews/027/127/571/non_2x/pokemon-logo-pokemon-icon-transparent-free-png.png"
                                    alt=""></li>
                            @foreach ($headerLinks as $single_header_link)
                                <a href="{{ $single_header_link['url'] }}">
                                    <li>
                                        <h3 class="p-2 m-0">{{ $single_header_link['label'] }}</h3>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
