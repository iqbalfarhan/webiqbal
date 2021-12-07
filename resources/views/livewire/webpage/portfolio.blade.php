<div>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Portofolio</h2>
            </div>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                @foreach ($datas as $data)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal{{ $data->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="/{{ $data->photo ?? "gambar/e-learning-system.png" }}" alt="{{ $data->title }}"/>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                @if ($datas->count() > 9)
                    <button class="btn btn-primary btn-lg" wire:click="singkap">tampilkan sedikit<i class="fa fa-question ml-2"></i></button>
                @else
                    <button class="btn btn-primary btn-lg" wire:click="moreProject">Lihat lainnya<i class="fa fa-question ml-2"></i></button>
                @endif
            </div>
        </div>
    </section>
    @foreach ($datas as $data)
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary mb-0">{{ $data->title }}</h2>
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <img class="img-fluid rounded mb-5" src="/{{ $data->photo }}" alt="Log Cabin"/>
                                    <p class="mb-5">{{ $data->keterangan }}</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>