@extends('layouts.app')

@section('content')

<div class="fixed top-0 z-[60] flex h-8 w-full items-center justify-center bg-primary">
    <span class="text-[12px] font-semibold uppercase tracking-[0.2em] text-on-primary">
        Бесплатная доставка при заказе от 3000 ₽
    </span>
</div>

<header class="site-header fixed top-8 z-50 w-full bg-surface/90 backdrop-blur-xl transition-all duration-300">
    <div class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-desktop">
        <a href="{{ route('home') }}" class="font-serif text-2xl tracking-[0.22em] sm:text-3xl">
            LUMEN
        </a>

        <nav class="desktop-nav hidden items-center gap-8 lg:flex">
            <a href="#" class="nav-link">Каталог</a>
            <a href="#" class="nav-link">Новинки</a>
            <a href="#" class="nav-link">Наборы</a>
            <a href="#" class="nav-link">Аксессуары</a>
            <a href="#" class="nav-link">Сертификаты</a>
        </nav>

        <div class="flex items-center gap-3 sm:gap-5">
            <button><span class="material-symbols-outlined">search</span></button>
            <button class="hidden sm:block"><span class="material-symbols-outlined">person</span></button>

            <button class="relative">
                <span class="material-symbols-outlined">shopping_bag</span>
                <span class="absolute -right-2 -top-2 flex h-4 w-4 items-center justify-center rounded-full bg-primary text-[10px] text-white">
                    0
                </span>
            </button>

            <button class="mobile-menu-btn lg:hidden" aria-label="Открыть меню">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>

    <nav class="mobile-menu lg:hidden">
        <a href="#">Каталог</a>
        <a href="#">Новинки</a>
        <a href="#">Наборы</a>
        <a href="#">Аксессуары</a>
        <a href="#">Сертификаты</a>
        <a href="#">Профиль</a>
    </nav>
</header>

<main class="overflow-x-hidden pt-28">

    <section class="flex min-h-[85vh] flex-col md:flex-row">
        <div class="flex w-full flex-col justify-center bg-surface-container-low px-6 py-24 lg:w-1/2 lg:px-desktop">
            <span class="mb-4 text-[12px] font-semibold uppercase tracking-[0.2em] text-secondary">
                Ручная работа
            </span>

            <h1 class="mb-6 font-serif text-5xl leading-tight lg:text-7xl">
                Создаём атмосферу<br>
                для особенных<br>
                моментов
            </h1>

            <p class="mb-10 max-w-md text-lg leading-relaxed text-on-surface-variant">
                Ароматические свечи из натурального воска и премиальных ароматов для дома, отдыха и подарков.
            </p>

            <a href="#" class="w-fit bg-primary px-10 py-4 text-[12px] font-semibold uppercase tracking-widest text-white transition hover:opacity-80">
                Перейти в каталог
            </a>
        </div>

        <div class="relative min-h-[400px] w-full lg:w-1/2">
            <img
                src="{{ asset('images/hero.jpg') }}"
                alt="Свечи LUMEN"
                class="absolute inset-0 h-full w-full object-cover"
            >
        </div>
    </section>

    <section class="fade-in-section px-6 py-24 lg:px-desktop">
        <div class="grid grid-cols-1 gap-8 border-y border-outline-variant py-12 md:grid-cols-4">
            <div class="feature-card">
                <span class="material-symbols-outlined feature-icon">eco</span>
                <h3>Натуральный состав</h3>
                <p>Используем натуральный воск и хлопковый фитиль.</p>
            </div>

            <div class="feature-card">
                <span class="material-symbols-outlined feature-icon">spa</span>
                <h3>Премиальные ароматы</h3>
                <p>Ароматы из Франции и Швейцарии.</p>
            </div>

            <div class="feature-card">
                <span class="material-symbols-outlined feature-icon">front_hand</span>
                <h3>Ручная работа</h3>
                <p>Каждая свеча создана вручную с заботой.</p>
            </div>

            <div class="feature-card">
                <span class="material-symbols-outlined feature-icon">featured_seasonal_and_gifts</span>
                <h3>Идеальный подарок</h3>
                <p>Стильная упаковка и подарочные наборы.</p>
            </div>
        </div>
    </section>

    <section class="fade-in-section px-6 pb-24 lg:px-desktop">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
            <div class="category-card">
                <img src="{{ asset('images/category-1.jpg') }}" alt="">
                <div>
                    <h2>Коллекция свечей</h2>
                    <p>Ароматы для любого настроения.</p>
                    <a href="#">Смотреть →</a>
                </div>
            </div>

            <div class="category-card">
                <img src="{{ asset('images/category-2.jpg') }}" alt="">
                <div>
                    <h2>Подарочные наборы</h2>
                    <p>Готовые наборы для близких.</p>
                    <a href="#">Смотреть →</a>
                </div>
            </div>

            <div class="category-card">
                <img src="{{ asset('images/category-3.jpg') }}" alt="">
                <div>
                    <h2>Аксессуары</h2>
                    <p>Всё для ухода за свечами.</p>
                    <a href="#">Смотреть →</a>
                </div>
            </div>

            <div class="category-card">
                <img src="{{ asset('images/category-4.jpg') }}" alt="">
                <div>
                    <h2>Сертификаты</h2>
                    <p>Позвольте выбрать аромат по душе.</p>
                    <a href="#">Смотреть →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="fade-in-section bg-surface-container-lowest px-6 py-24 lg:px-desktop">
        <div class="mb-10 flex items-end justify-between">
            <div>
                <span class="text-[12px] font-semibold uppercase tracking-widest text-secondary">
                    Новинки
                </span>
                <h2 class="font-serif text-4xl">Новые поступления</h2>
            </div>

            <a href="#" class="text-[12px] font-semibold uppercase tracking-widest">
                Смотреть все →
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-5">
            @foreach($products as $product)
                <div class="product-card">
                    <div class="relative overflow-hidden bg-surface">
                        <img
                            src="{{ asset('images/' . $product['img']) }}"
                            alt="{{ $product['name'] }}"
                            class="aspect-[4/5] w-full object-cover transition duration-500 hover:scale-105"
                        >

                        <button class="absolute right-4 top-4">
                            <span class="material-symbols-outlined">favorite</span>
                        </button>
                    </div>

                    <div class="pt-4">
                        <h3>{{ $product['name'] }}</h3>
                        <p>Свеча ароматическая / 200 мл</p>

                        <div class="mt-3 flex items-center justify-between">
                            <strong>{{ $product['price'] }}</strong>

                            <button class="flex h-9 w-9 items-center justify-center rounded-full bg-primary text-white">
                                <span class="material-symbols-outlined text-sm">shopping_bag</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="fade-in-section px-6 py-24 lg:px-desktop">
        <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">
            <img
                src="{{ asset('images/about.jpg') }}"
                alt="О бренде LUMEN"
                class="aspect-square w-full object-cover"
            >

            <div>
                <span class="mb-4 block text-[12px] font-semibold uppercase tracking-widest text-secondary">
                    О нас
                </span>

                <h2 class="mb-6 font-serif text-5xl leading-tight">
                    Мы создаём не просто свечи, а атмосферу
                </h2>

                <p class="mb-8 text-lg leading-relaxed text-on-surface-variant">
                    LUMEN — это про уют, тепло и моменты, которые остаются в памяти. Мы верим в силу ароматов и натуральных материалов.
                </p>

                <a href="#" class="inline-block bg-primary px-10 py-4 text-[12px] font-semibold uppercase tracking-widest text-white">
                    Узнать больше
                </a>
            </div>
        </div>
    </section>

    <section class="fade-in-section bg-surface-container px-6 py-24 text-center lg:px-desktop">
        <span class="material-symbols-outlined mb-6 text-secondary" style="font-size: 40px;">mail</span>

        <h2 class="mb-4 font-serif text-4xl">
            Подпишитесь на новости
        </h2>

        <p class="mx-auto mb-8 max-w-lg text-on-surface-variant">
            Получайте ранний доступ к новым коллекциям и специальным предложениям.
        </p>

        <form class="mx-auto flex max-w-md gap-4">
            <input
                type="email"
                placeholder="Ваш email"
                class="flex-grow border-none bg-white px-6 py-4 focus:ring-1 focus:ring-primary"
            >

            <button class="bg-primary px-8 text-[12px] font-semibold uppercase tracking-widest text-white">
                Подписаться
            </button>
        </form>
    </section>

</main>

<footer class="grid grid-cols-1 gap-8 bg-surface-container-low px-6 py-20 lg:grid-cols-4 lg:px-desktop">
    <div>
        <h3 class="mb-4 font-serif text-3xl tracking-[0.25em]">LUMEN</h3>
        <p class="max-w-xs text-on-surface-variant">
            Свечи ручной работы для уютного дома.
        </p>
    </div>

    <div>
        <h4 class="footer-title">Магазин</h4>
        <a href="#">Все товары</a>
        <a href="#">Наборы</a>
        <a href="#">Аксессуары</a>
    </div>

    <div>
        <h4 class="footer-title">Информация</h4>
        <a href="#">О нас</a>
        <a href="#">Доставка</a>
        <a href="#">Оплата</a>
    </div>

    <div>
        <h4 class="footer-title">Контакты</h4>
        <a href="#">Instagram</a>
        <a href="#">Telegram</a>
        <a href="#">Email</a>
    </div>

    <div class="col-span-full border-t border-outline-variant pt-8 text-sm text-on-surface-variant">
        © 2025 LUMEN. Все права защищены.
    </div>
</footer>

@endsection