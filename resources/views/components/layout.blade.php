<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <title>Разработка электроники - Dimgent Technologies</title>--}}
    <title>dim-tail.test</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-ghost-white text-gray-800 font-hanken-grotesk">
<div class="relative min-h-screen px-10">
    <nav class="flex justify-between items-center py-4 px-10 border-b
        border-black/20 bg-blue-dimgent fixed top-0 left-0 w-full z-50
        shadow-md">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.png') }}"
                     alt="Logo of Dimgent Technologies">
            </a>
        </div>

        <div class="space-x-6 font-bold">
            <x-nav-link href="/">Главная</x-nav-link>
            <x-nav-link href="/products">Разработки</x-nav-link>
            <x-nav-link href="/services">Услуги</x-nav-link>
            <x-nav-link href="/projects">Проекты</x-nav-link>
            <x-nav-link href="/contacts">Контакты</x-nav-link>
            <x-nav-link href="/about">О нас</x-nav-link>
        </div>

        <div class="flex justify-center text-sm items-center space-x-2">
            <x-lang-link href="https://dimgent.com/">en</x-lang-link>
            <x-lang-link href="#" class="font-extrabold">ru</x-lang-link>
        </div>

    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{--            {{ $slot }}--}}

        <!-- Begin of right column -->
        <div id="left">
            <div>
                <h4 class="top">Осуществляем:</h4>
                <ul>
                    <li>Полный цикл разработки электроники <br/>(концепт –
                        готовое изделие).
                    </li>
                    <li>Реализацию отдельных стадий разработки.</li>
                    <li>Завершение разработки уже начатых и еще незаконченных
                        проектов.
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="top">«Dimgent Technologies» – это:</h4>
                <ul>
                    <li>Более 20 лет опыта.</li>
                    <li>Более 50 успешно реализованных проектов.</li>
                    <li>Опытные специалисты.</li>
                    <li>Высокая гарантия качества.</li>
                    <li>Короткие сроки разработки.</li>
                    <li>Низкая цена.</li>
                    <li class="link"><a href="about.html">Подробнее...</a></li>
                </ul>
            </div>
            <div>
                <h4 class="top">Также осуществляем:</h4>
                <ul>
                    <li>Программирование контроллеров (микроконтроллеров).</li>
                </ul>
            </div>
            <div>
                <h4 class="top">Расстояние – проблема? Конечно, нет!</h4>
                <p>Большинство наших клиентов из других стран желали заказать
                    разработку устройства на основе аутсорсинга для сокращения
                    расходов.</p>
                <p>Некоторые из них были обеспокоены, что работы ведутся на
                    большом расстоянии, однако, когда был получен готовый
                    продукт и оценено его качество, то заказчики осуществили еще
                    несколько заказов на разработку электронного
                    оборудования.</p>
                <p>Мы можем заверить Вас, что расстояние не будет проблемой, так
                    как Интернет делает нас ближе, чем когда-либо ранее.</p>
                <p>Более того, мы будем своевременно информировать Вас о ходе
                    выполнения работы с фотографиями и видео, если это будет
                    необходимо.</p>
            </div>
        </div>

        <!-- End of right column -->

    </main>

        <footer class="bg-gray-400 text-white py-8 mt-10">
            <div class="container mx-auto px-6 md:px-12">
                <!-- Top Section with Links -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- About Section -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">// Dimgent Technologies</h3>
                        <p class="text-sm">Разработка электронных устройств.</p>
                        <p class="text-sm">
                            «Dimgent Technologies» – компания с многолетним опытом в
                            разработке электроники. Мы гарантируем высокое качество
                            и кратчайшие сроки выполнения работ!
                        </p>
                    </div>

                    <!-- Links -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">Быстрые ссылки</h3>
                        <ul class="space-y-3">
                            <li><a href="/" class="text-sm hover:text-gray-300">Главная</a>
                            </li>
                            <li><a href="/products"
                                   class="text-sm hover:text-gray-300">Разработки</a>
                            </li>
                            <li><a href="/services"
                                   class="text-sm hover:text-gray-300">Услуги</a>
                            </li>
                            <li><a href="/projects"
                                   class="text-sm hover:text-gray-300">Проекты</a>
                            </li>
                            <li><a href="/contacts"
                                   class="text-sm hover:text-gray-300">Контакты</a>
                            </li>
                            <li><a href="/about"
                                   class="text-sm hover:text-gray-300">О нас</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Information -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">Контакты</h3>
                        <p class="text-sm">Связаться с нами:</p>
                        <ul class="mt-3 text-sm space-y-2">
                            <li><a href="mailto:support@dimgent.com"
                                   class="hover:text-gray-300">Email:
                                    support@dimgent.com</a></li>
                            <li><a href="tel:+1234567890"
                                   class="hover:text-gray-300">Телефон: +1 234 567
                                    890</a></li>
                            <li><a href="#" class="hover:text-gray-300">Адрес:
                                    Москва, Россия</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-bold text-lg mb-4">Social Media</h3>
                        <div class="flex space-x-4">
                            <a href="#"
                               class="p-2 bg-gray-500 rounded-full hover:bg-gray-400">
                                <img
                                    src="{{ Vite::asset('resources/images/icons/facebook.svg') }}"
                                    alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="#"
                               class="p-2 bg-gray-500 rounded-full hover:bg-gray-400">
                                <img
                                    src="{{ Vite::asset('resources/images/icons/instagram.svg') }}"
                                    alt="Instagram" class="w-5 h-5">
                            </a>
                            <a href="#"
                               class="p-2 bg-gray-500 rounded-full hover:bg-gray-400">
                                <img
                                    src="{{ Vite::asset('resources/images/icons/twitter.svg') }}"
                                    alt="Twitter" class="w-5 h-5">
                            </a>
                            <a href="#"
                               class="p-2 bg-gray-500 rounded-full hover:bg-gray-400">
                                <img
                                    src="{{ Vite::asset('resources/images/icons/linkedin.svg') }}"
                                    alt="LinkedIn" class="w-5 h-5">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-gray-500 pt-6 text-center">
                    <p class="text-sm">2025 // Dimgent Technologies</p>
                </div>
            </div>
        </footer>

</div>
</body>
</html>
