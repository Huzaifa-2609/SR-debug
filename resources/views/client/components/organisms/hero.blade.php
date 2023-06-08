@push('css')
    <link rel="stylesheet" href="{{ asset('client/components/molecules/hero/hero-product.css') }}">
@endpush

<div class=" ">
    <x-molecules.hero.text-block />

    <div class="row g-md-4 g-3 container pb-5">
        @foreach ($dataProduct->take(4) as $item)
        <div class="col-md-6 {{ $loop->iteration == 2 || $loop->iteration == 3 ? 'col-6' : 'col-12'}}">
            <x-molecules.hero.card-product :title="$item->title" :dataImage="$item->productImage"/>
        </div>
        @endforeach
    </div>
</div>