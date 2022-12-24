<x-layouts.layout>

    <x-layouts.repo.statistics/>

    <x-layouts.repo.navbar/>

    <div class="container mx-auto mb-6">
        <div class="grid grid-cols-12 mt-5 space-x-5 place-content-center">
            <div class="col-span-7 col-start-2 file-explorer-container">

                <x-layouts.repo.branch.navbar/>

                <x-layouts.repo.branch.commits/>

                <x-layouts.repo.branch.file-explorer/>

                <x-layouts.repo.branch.readme/>

            </div>

            <div class="col-span-3 sidebar">

                <x-layouts.repo.branch.about/>

                <x-layouts.repo.branch.releases/>

                <x-layouts.repo.branch.used-by/>

                <x-layouts.repo.branch.package/>

                <x-layouts.repo.branch.languages/>

            </div>
        </div>
    </div>
</x-layouts.layout>
