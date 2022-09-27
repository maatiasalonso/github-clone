<x-layouts.layout>

    <x-layouts.repo.statistics/>

    <x-layouts.repo.navbar/>

    <div class="container container-xl mx-auto mb-6">
        <div class="flex ml-9 mt-5 space-x-5">
            <div class="file-explorer-container">

                <x-layouts.repo.branch.navbar/>

                <x-layouts.repo.branch.commits/>

                <x-layouts.repo.branch.file-explorer/>

                <x-layouts.repo.branch.readme/>

            </div>

            <div class="sidebar w-full lg:w-1/4">

                <x-layouts.repo.branch.about/>

                <x-layouts.repo.branch.releases/>

                <x-layouts.repo.branch.used-by/>

                <x-layouts.repo.branch.contributors/>

                <x-layouts.repo.branch.languages/>

            </div>
        </div>
    </div>
</x-layouts.layout>
