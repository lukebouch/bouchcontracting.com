<div x-data="{ open: false }">
    <img class="rounded-lg" src="{{ $src }}" alt="{{ $alt }}" @click="open = true">
    <div class="fixed top-0 right-0 bottom-0 left-0 p-10 bg-orange bg-opacity-80 flex justify-center items-center"
        x-cloak x-show="open" @click="open = false">
        <img class="shadow-lg" src="{{ $src }}" alt="{{ $alt }}">
    </div>
</div>