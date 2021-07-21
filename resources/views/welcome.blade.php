<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <!-- start navbar -->
        <nav class="header header--fixed">
            <div class="header__left">
                <a href="/" class="header__logo">SP</a>
            </div>
            <input type="checkbox" name="" id="check">
            <div class="header__rigth">
                <ul class="header__list">
                    <a href="#" class="header__item">Blog</a>
                    <a href="#" class="header__item header__item--active">Forum</a>
                    <a href="#" class="header__item">Services</a>
                    <a href="#" class="header__item">Contact</a>
                </ul>
                <div class="header__post">
                    <form class="header__search">
                        <input autocomplete='off' type="text" placeholder="search..." name="search">
                    </form>
                    <a href="#" class="header__login btn">login</a>
                </div>
            </div>
            <label for="check" class="header__btn">
                <img id="btn" src="{{ Storage::url('icons/menu_filled.svg') }}" alt="">
                <img id="cancel" src="{{ Storage::url('icons/multiply_filled.svg') }}" alt="">
            </label>
        </nav>
        <!-- end navbar -->
        <div class="banner">
            <div class="container">
                <div class="banner__wrapper">
                    <div class="banner__image">
                        <img width="200px" src="{{ Storage::url('icons/vue.png') }}" alt="" srcset="">
                    </div>
                    <div class="banner__content">
                        <span class="banner__info">nouveau</span>
                        <h1 class="banner__title">Comment utiliser Lodash avec Vue JS</h1>
                        <p class="banner__extrait">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="banner__link">lire la suite</a>
                    </div>
                </div>
                <div class="author">
                    <div class="author__header">
                        <span class="author__salut">Salut je suis</span>
                        <span class="author__name">FranckDev21</span>
                    </div>
                    <p class="author__description">
                        je suis un developpeur Full Stack et Milliadaire qui partage la
                        bonté de programmation avec la communauté
                    </p>
                    <div class="author__technos">
                        <a href="#" class="author__techno author__techno--1">#JavaScript</a>
                        <a href="#" class="author__techno author__techno--2">#HTML</a>
                        <a href="#" class="author__techno author__techno--3">#SASS</a>
                        <a href="#" class="author__techno author__techno--4">#Vue JS</a>
                        <a href="#" class="author__techno author__techno--5">#Laravel</a>
                        <a href="#" class="author__techno author__techno--6">#ionic</a>
                        <a href="#" class="author__techno author__techno--7">#Angular</a>
                    </div>
                </div>
            </div>
        </div>

        <main class=" pt-10 ">
            <div class="card">
                <img src="{{ Storage::url('post_img/_5.jpg') }}" alt="post-image" class="card__image" />
                <div class="card__content">
                    <h2 class="card__title">hello</h2>
                    <p class="card__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti!</p>
                    <div class="btn">voir plus</div>
                </div>
            </div>

            <div class="card card--dark">
                <img src="{{ Storage::url('post_img/_6.jpg') }}" alt="post-image" class="card__image" />
                <div class="card__content">
                    <h2 class="card__title">hello</h2>
                    <p class="card__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti!</p>
                    <div class="btn">voir plus</div>
                </div>
            </div>

            <div class="card">
                <img src="{{ Storage::url('post_img/_4.jpg') }}" alt="post-image" class="card__image" />
                <div class="card__content">
                    <h2 class="card__title">hello</h2>
                    <p class="card__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti!</p>
                    <div class="btn">voir plus</div>
                </div>
            </div>

            <div class="card card--dark">
                <img src="{{ Storage::url('post_img/_1.jpg') }}" alt="post-image" class="card__image" />
                <div class="card__content">
                    <h2 class="card__title">hello</h2>
                    <p class="card__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti!</p>
                    <div class="btn">voir plus</div>
                </div>
            </div>

            <div class="card">
                <img src="{{ Storage::url('post_img/_3.jpg') }}" alt="post-image" class="card__image" />
                <div class="card__content">
                    <h2 class="card__title">hello</h2>
                    <p class="card__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti!</p>
                    <div class="btn">voir plus</div>
                </div>
            </div>

            <div class="card card--dark">
                <img src="{{ Storage::url('post_img/_2.jpg') }}" alt="post-image" class="card__image" />
                <div class="card__content">
                    <h2 class="card__title">hello</h2>
                    <p class="card__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti!</p>
                    <div class="btn">voir plus</div>
                </div>
            </div>
        </main>

    </body>
</html>
