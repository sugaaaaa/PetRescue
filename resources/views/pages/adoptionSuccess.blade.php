<x-app-layout>
    <section class="max-w-screen-xl mx-auto bg-[#F9F6E5] p-10 rounded-lg">
        <h1 class="text-2xl text-center font-bold mb-5">Adoption Application Submitted</h1>
        <br>
        <p class="text-center">Thank you for your application. You can view and download the PDF below.</p>
        <div class="flex justify-center items-center mt-5 space-x-4">
            <a href="/petinfo" target="_blank">
                <button class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    View PDF
                </button>
            </a>
            <a href="{{ route('adoption.pdf') }}">
                <button class="py-2 px-3 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                    Download PDF
                </button>
            </a>
        </div>
    </section>
</x-app-layout>
