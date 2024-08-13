<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <section class="max-w-screen-lg mx-auto my-10">
        <h1 class="text-2xl font-bold text-center">Name</h1>
        <h1 class="text-3xl font-bold text-center">Amazing little dog!</h1>
        <div class="flex justify-center mt-5">
            <img src="{{asset('image/cat-item-1.jpeg')}}" alt="" class="w-96 h-auto rounded-2xl">
        </div>
        <h1 class="text-3xl font-bold mt-5 text-center">Medium Female Mixed Breed Dog</h1>
        <p class="text-justify mt-4">Looking to add some spice to your life? Meet Nutmeg!This gorgeous girl is a bouncy and happy puppy with a really
            sweet nature. She is very affectionate and loves to snuggle up for cuddles with her foster family, even better if you
            top it off with some belly rubs as she falls asleep! She has a lot of love to give in return and shows it with kisses and a
            waggy tail. Nutmeg’s happy place is the outdoors. She loves her walks, playdates at the park and playing games in
            the backyard such as tug of war and fetch. Nutmeg also loves water. Whether it’s a run through the sprinkler or
            running along the beach, she finds absolute joy in splashing around in water, even more so if she has a doggy friend
            to share the fun with!Nutmeg is dog friendly and wants to meet every other dog she sees. She has been living with
            another dog in her foster home and the two dogs get along well. Nutmeg loves to play chasies with her foster sibling.
            When the play time is over, they will nap side by side in each other’s company. Nutmeg will need a home with another
            friendly and playful dog. When out and about, she gains confidence from her foster sibling and overcomes challenges
        </p>
        <p class="text-center">Continue reading about Nutmeg at <a href="/" class="text-blue-900 font-bold">PetRescue</a></p>
        <div class="grid grid-cols-3 gap-5 mt-5">
            <div class="relative overflow-x-auto sm:rounded-lg col-span-2">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Age
                            </th>
                            <td class="px-6 py-4">
                                9 months
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Vaccinated
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Desexed
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Wormed
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Source number
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Breeder ID
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Adoption fee
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microchip number 
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Rescue Organisation 
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <img src="{{asset('image/logo.jpg')}}" alt="" class="w-40 rounded-2xl">
            </div>
        </div>
        <div class="flex justify-between px-5 py-2 bg-blue-500 items-center rounded-lg mt-5">
            <img src="{{asset('image/logo.jpg')}}" alt="" class="h-8 rounded-full">
            <h1 class="font-bold">PetRescue ID: 1023299</h1>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
