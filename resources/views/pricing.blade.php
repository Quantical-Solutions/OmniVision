<x-app-layout>
    <x-slot name="header"></x-slot>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-gray-900">
        <div class="pt-12 px-4 sm:px-6 lg:px-8 lg:pt-20">
            <div class="text-center">
                <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">
                    Pricing
                </h2>
                <p class="mt- text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl">
                    The right price for you, whoever you are
                </p>
                <p class="mt-3 max-w-4xl mx-auto text-xl text-gray-300 sm:mt-5 sm:text-2xl">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit numquam eligendi quos odit doloribus molestiae voluptatum.
                </p>
            </div>
        </div>

        <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
            <div class="relative z-0">
                <div class="absolute inset-0 h-5/6 bg-gray-900 lg:h-2/3"></div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative lg:grid lg:grid-cols-7">
                        <div class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3">
                            <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
                                <div class="flex-1 flex flex-col">
                                    <div class="bg-white px-6 py-10">
                                        <div>
                                            <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-hobby">
                                                Hobby
                                            </h3>
                                            <div class="mt-4 flex items-center justify-center">
                                                <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                                    <span class="mt-2 mr-2 text-4xl font-medium">$</span>
                                                    <span class="font-extrabold">79</span>
                                                </span>
                                                <span class="text-xl font-medium text-gray-500">/month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                                        <ul class="space-y-4">
                                            <li class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <!-- Heroicon name: check -->
                                                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <p class="ml-3 text-base font-medium text-gray-500">
                                                    Pariatur quod similique
                                                </p>
                                            </li>

                                            <li class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <!-- Heroicon name: check -->
                                                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <p class="ml-3 text-base font-medium text-gray-500">
                                                    Sapiente libero doloribus
                                                </p>
                                            </li>

                                            <li class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <!-- Heroicon name: check -->
                                                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <p class="ml-3 text-base font-medium text-gray-500">
                                                    Vel ipsa esse repudiandae
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="mt-8">
                                            <div class="rounded-lg shadow-md">
                                                <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50" aria-describedby="tier-hobby">
                                                    Start your trial
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4">
                            <div class="relative z-10 rounded-lg shadow-xl">
                                <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-indigo-600" aria-hidden="true"></div>
                                <div class="absolute inset-x-0 top-0 transform translate-y-px">
                                    <div class="flex justify-center transform -translate-y-1/2">
                                        <span class="inline-flex rounded-full bg-indigo-600 px-4 py-1 text-sm font-semibold tracking-wider uppercase text-white">Most popular</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                                    <div>
                                        <h3 class="text-center text-3xl font-semibold text-gray-900 sm:-mx-6" id="tier-growth">
                                            Growth
                                        </h3>
                                        <div class="mt-4 flex items-center justify-center">
                                            <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl">
                                                <span class="mt-2 mr-2 text-4xl font-medium">$</span>
                                                <span class="font-extrabold">149</span>
                                            </span>
                                            <span class="text-2xl font-medium text-gray-500">/month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t-2 border-gray-100 rounded-b-lg pt-10 pb-8 px-6 bg-gray-50 sm:px-10 sm:py-10">
                                    <ul class="space-y-4">
                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: check -->
                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                Quia rem est sed impedit magnam
                                            </p>
                                        </li>

                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: check -->
                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                Dolorem vero ratione voluptates
                                            </p>
                                        </li>

                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: check -->
                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                Qui sed ab doloribus voluptatem dolore
                                            </p>
                                        </li>

                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: check -->
                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                Laborum commodi molestiae id et fugiat
                                            </p>
                                        </li>

                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: check -->
                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                Nam ut ipsa nesciunt culpa modi dolor
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="mt-10">
                                        <div class="rounded-lg shadow-md">
                                            <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-indigo-600 px-6 py-4 text-xl leading-6 font-medium text-white hover:bg-indigo-700" aria-describedby="tier-growth">
                                                Start your trial
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3">
                            <div class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
                                <div class="flex-1 flex flex-col">
                                    <div class="bg-white px-6 py-10">
                                        <div>
                                            <h3 class="text-center text-2xl font-medium text-gray-900" id="tier-scale">
                                                Scale
                                            </h3>
                                            <div class="mt-4 flex items-center justify-center">
                                                <span class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                                    <span class="mt-2 mr-2 text-4xl font-medium">$</span>
                                                    <span class="font-extrabold">349</span>
                                                </span>
                                                <span class="text-xl font-medium text-gray-500">/month</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                                        <ul class="space-y-4">
                                            <li class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <!-- Heroicon name: check -->
                                                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <p class="ml-3 text-base font-medium text-gray-500">
                                                    Pariatur quod similique
                                                </p>
                                            </li>

                                            <li class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <!-- Heroicon name: check -->
                                                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <p class="ml-3 text-base font-medium text-gray-500">
                                                    Sapiente libero doloribus
                                                </p>
                                            </li>

                                            <li class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <!-- Heroicon name: check -->
                                                    <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </div>
                                                <p class="ml-3 text-base font-medium text-gray-500">
                                                    Vel ipsa esse repudiandae
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="mt-8">
                                            <div class="rounded-lg shadow-md">
                                                <a href="#" class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50" aria-describedby="tier-scale">
                                                    Start your trial
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto bg-white py-16 sm:py-24 sm:px-6 lg:px-8">
            <!-- xs to lg -->
            <div class="max-w-2xl mx-auto lg:hidden">
                <div class="px-4">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Basic</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$9</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus non tellus.</p>
                    <a href="#" class="mt-6 block border border-gray-800 rounded-md bg-gray-800 w-full py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Basic</a>
                </div>

                <table class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie lobortis massa.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Reporting
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Support
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Basic</a>
                </div>

                <div class="px-4 mt-16">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Essential</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$29</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A tempor in sed.</p>
                    <a href="#" class="mt-6 block border border-gray-800 rounded-md bg-gray-800 w-full py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Essential</a>
                </div>

                <table class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie lobortis massa.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
                        <td class="py-5 pr-4">
                            <span class="block text-sm text-gray-700 text-right">Up to 20 users</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Reporting
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Support
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: minus -->
                            <svg class="ml-auto h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">No</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Essential</a>
                </div>

                <div class="px-4 mt-16">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Premium</h2>
                    <p class="mt-4">
                        <span class="text-4xl font-extrabold text-gray-900">$59</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <p class="mt-4 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis tristique non.</p>
                    <a href="#" class="mt-6 block border border-gray-800 rounded-md bg-gray-800 w-full py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Premium</a>
                </div>

                <table class="mt-8 w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Features
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Molestie lobortis massa.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
                        <td class="py-5 pr-4">
                            <span class="block text-sm text-gray-700 text-right">Up to 50 users</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Reporting
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <caption class="bg-gray-50 border-t border-gray-200 py-3 px-4 text-sm font-medium text-gray-900 text-left">
                        Support
                    </caption>
                    <thead>
                    <tr>
                        <th class="sr-only" scope="col">Feature</th>
                        <th class="sr-only" scope="col">Included</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>

                    <tr class="border-t border-gray-200">
                        <th class="py-5 px-4 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
                        <td class="py-5 pr-4">
                            <!-- Heroicon name: check -->
                            <svg class="ml-auto h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Yes</span>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="border-t border-gray-200 px-4 pt-5">
                    <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Premium</a>
                </div>
            </div>

            <!-- lg+ -->
            <div class="hidden lg:block">
                <table class="w-full h-px table-fixed">
                    <caption class="sr-only">
                        Pricing plan comparison
                    </caption>
                    <thead>
                    <tr>
                        <th class="pb-4 px-6 text-sm font-medium text-gray-900 text-left" scope="col">
                            <span class="sr-only">Feature by</span>
                            <span>Plans</span>
                        </th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Basic</th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Essential</th>

                        <th class="w-1/4 pb-4 px-6 text-lg leading-6 font-medium text-gray-900 text-left" scope="col">Premium</th>
                    </tr>
                    </thead>
                    <tbody class="border-t border-gray-200 divide-y divide-gray-200">
                    <tr>
                        <th class="py-8 px-6 text-sm font-medium text-gray-900 text-left align-top" scope="row">Pricing</th>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$9</span>
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Quis suspendisse ut fermentum neque vivamus non tellus.</p>
                                <a href="#" class="absolute bottom-0 flex-grow block w-full bg-gray-800 border border-gray-800 rounded-md 5 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Basic</a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$29</span>
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Quis eleifend a tincidunt pellentesque. A tempor in sed.</p>
                                <a href="#" class="absolute bottom-0 flex-grow block w-full bg-gray-800 border border-gray-800 rounded-md 5 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Essential</a>
                            </div>
                        </td>

                        <td class="h-full py-8 px-6 align-top">
                            <div class="relative h-full table">
                                <p>
                                    <span class="text-4xl font-extrabold text-gray-900">$59</span>
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">Orci volutpat ut sed sed neque, dui eget. Quis tristique non.</p>
                                <a href="#" class="absolute bottom-0 flex-grow block w-full bg-gray-800 border border-gray-800 rounded-md 5 py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Premium</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="bg-gray-50 py-3 pl-6 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Features</th>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Molestie lobortis massa.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Urna purus felis.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Tellus pulvinar sit dictum.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Convallis.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <span class="block text-sm text-gray-700">Up to 20 users</span>
                        </td>
                        <td class="py-5 px-6">
                            <span class="block text-sm text-gray-700">Up to 50 users</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="bg-gray-50 py-3 pl-6 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Reporting</th>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Adipiscing.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Eget risus integer.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Gravida leo urna velit.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Elementum ut dapibus mi feugiat cras nisl.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="bg-gray-50 py-3 pl-6 text-sm font-medium text-gray-900 text-left" colspan="4" scope="colgroup">Support</th>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Sit dignissim.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Congue at nibh et.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Volutpat feugiat mattis.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>

                    <tr>
                        <th class="py-5 px-6 text-sm font-normal text-gray-500 text-left" scope="row">Tristique pellentesque ornare diam sapien.</th>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Basic</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: minus -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Not included in Essential</span>
                        </td>
                        <td class="py-5 px-6">
                            <!-- Heroicon name: check -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Included in Premium</span>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr class="border-t border-gray-200">
                        <th class="sr-only" scope="row">Choose your plan</th>

                        <td class="pt-5 px-6">
                            <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Basic</a>
                        </td>

                        <td class="pt-5 px-6">
                            <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Essential</a>
                        </td>

                        <td class="pt-5 px-6">
                            <a href="#" class="block w-full bg-gray-800 border border-gray-800 rounded-md py-2 text-sm font-semibold text-white text-center hover:bg-gray-900">Buy Premium</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="pb-16 xl:flex xl:items-center xl:justify-between">
                <div>
                    <h1 class="text-4xl font-extrabold sm:text-5xl sm:tracking-tight">
                        <span class="text-gray-900">Everything you need for </span>
                        <span class="text-indigo-600">$99 a month</span>
                    </h1>
                    <p class="mt-5 text-xl text-gray-500">Includes every feature we offer plus unlimited projects and unlimited users.</p>
                </div>
                <a href="#" class="mt-8 w-full bg-indigo-600 border border-transparent px-5 py-3 inline-flex items-center justify-center text-base font-medium rounded-md text-white hover:bg-indigo-700 sm:mt-10 sm:w-auto xl:mt-0">Get started today</a>
            </div>
            <div class="border-t border-gray-200 pt-16 xl:grid xl:grid-cols-3 xl:gap-x-8">
                <div>
                    <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Everything you need</h2>
                    <p class="mt-2 text-3xl font-extrabold text-gray-900">All-in-one platform</p>
                    <p class="mt-4 text-lg text-gray-500">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec. Urna, sed a lectus elementum blandit et.</p>
                </div>
                <div class="mt-4 sm:mt-8 md:mt-10 md:grid md:grid-cols-2 md:gap-x-8 xl:mt-0 xl:col-span-2">
                    <ul class="divide-y divide-gray-200">
                        <li class="py-4 flex md:py-0 md:pb-4">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Vitae in pulvinar odio id utobortis in inter.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Sed sed id viverra viverra augue eget massa.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Urna, gravida amet, a, integer venenatis.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Lobortis sed pharetra amet vitae eleifend.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Ullamcorper blandit a consequat donec elit aoreet.</span>
                        </li>
                    </ul>
                    <ul class="border-t border-gray-200 divide-y divide-gray-200 md:border-t-0">
                        <li class="py-4 flex md:border-t-0 md:py-0 md:pb-4">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Vitae in pulvinar odio id utobortis in inter.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Sed sed id viverra viverra augue eget massa.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Urna, gravida amet, a, integer venenatis.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Lobortis sed pharetra amet vitae eleifend.</span>
                        </li>

                        <li class="py-4 flex">
                            <!-- Heroicon name: check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-base text-gray-500">Ullamcorper blandit a consequat donec elit aoreet.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
