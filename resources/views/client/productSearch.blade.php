<x-template.layout title="{{$title}}">
  <x-organisms.navbar cartCount=10 :path="$shop->path"/>
  <x-organisms.products :dataProduct="$product">
    <h3 class="pb-3">Result Product : <u>{{ $search }}</u></h3>
    <x-slot name="productCTA">
      <div class="pt-5">
        {{ $product->links('vendor.pagination.bootstrap-5') }}
      </div>
    </x-slot>
  </x-organisms.products>
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>