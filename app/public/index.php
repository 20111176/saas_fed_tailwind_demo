<?php

/**
 * Home Page Dedo using TailwindCSS
 *
 * DESCRIPTION OF THE PURPOSE AND USE OF THE CODE
 * MAY BE MORE THAN ONE LINE LONG
 * KEEP LINE LENGTH TO NO MORE THAN 96 CHARACTERS
 *
 * Filename:        index.php”
 * Location:        app/public
 * Project:         SaaS-FED-Notes
 * Date Created:    21/08/2024
 *
 * Author:          Sukhwan Ko <20111176@tafe.wa.edu.au>
 *
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo!</title>
    <link rel="stylesheet" href="assets/css/site.css">
</head>

<body>
    <!-- header>h1+nav>ul>li*5>a[href=#]{Link $} -->
    <header class="bg-black text-white p-4 flex mb-8 rounded-t-lg">
        <h1 class="text-3xl">DEMO</h1>
        <nav class="flex-grow ml-8">
            <ul class="flex gap-4">
                <li>
                    <a href="#" class="px-4 py-2 border-0 border-b-2
                                    hover:text-amber-500
                                    hover:border-amber-500
                                    transition ease-in-out duration-300 ">Link 1</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 border-0 border-b-2
                                    hover:text-amber-500
                                    hover:border-amber-500
                                    transition ease-in-out duration-300 ">Link 2</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 border-0 border-b-2
                                    hover:text-amber-500
                                    hover:border-amber-500
                                    transition ease-in-out duration-300 ">Link 3</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 border-0 border-b-2
                                    hover:text-amber-500
                                    hover:border-amber-500
                                    transition ease-in-out duration-300 ">Link 4</a>
                </li>
                <li>
                    <a href="#" class="px-4 py-2 border-0 border-b-2
                                    hover:text-amber-500
                                    hover:border-amber-500
                                    transition ease-in-out duration-300 ">Link 5</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- main>article>(header>h2)+(section>p>lorem) -->
    <main class="container flex flex-col min-h-screen">
        <article class="w-8/12 mx-auto bg-white p-4 pb-6 shadow-md shadow-black/20">
            <header class="bg-zinc-200 p-4 text-xl -mt-4 -mx-4 mb-2 rounded-t-lg">
                <h2>Article Title</h2>
            </header>
            <section class="flex  flex-col gap-4">
                <!-- p*3>lorem -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, porro saepe. Quis reiciendis inventore tempora possimus ducimus molestiae corrupti necessitatibus cupiditate, deserunt a, enim accusamus quam beatae, explicabo odio voluptates.</p>
                <p>Nobis adipisci assumenda qui expedita commodi suscipit beatae iste ab doloribus quidem dolores nesciunt totam hic doloremque, vel dolore eos. Mollitia, ab in quibusdam placeat distinctio dignissimos sapiente hic consequuntur.</p>
                <p>Tenetur placeat aspernatur eius architecto temporibus culpa, provident laudantium dolor blanditiis natus, harum excepturi id mollitia, adipisci similique officia vel accusantium maxime quisquam eligendi. Dolore eos voluptatum officiis sapiente iure.</p>
            </section>
        </article>
    </main>
    <!-- footer>section*3>p{Placeholder} -->
    <footer class="mt-8 bg-zinc-700 text-zinc-200 pt-2 pb-8 pl-4 pr-4 flex">
        <section class="flex-grow text-left">
            <p>Placeholder</p>
        </section>
        <section class="flex-grow text-center">
            <p>Placeholder</p>
        </section>
        <section class="flex-grow text-right">
            <p>Placeholder</p>
        </section>
    </footer>
</body>

</html>