<section class="team-section bg-two pt-150 pb-120 rpt-95 rpb-70">
    <div class="container">
        <div class="section-title mb-90">
            <h2>Products and<br>Details.</h2>
        </div>

        <div class="team-carousel owl-carousel style-two">
            @foreach($products as $product)
                <div class="team-item">
                    <img src="{{ $product->getpic1() }}" alt="Team Member" style="cursor: pointer;" onclick="window.location='{{ route('show.product', $product->unid) }}'">
                    <h5><a href="{{ route('show.product', $product->unid) }}">{{ $product->name }}</a></h5>
                    <p>{{ $product->briefInfo }}</p>
                </div>
            @endforeach

        </div>

    </div>
</section>