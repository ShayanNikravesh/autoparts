$(document).ready(function () {
    $(".xzoom, .xzoom-gallery").xzoom({
        position: 'left',
    });

    var swiper7 = new Swiper('.productAttr', {
        slidesPerView: 7,
        spaceBetween: 3,
        breakpoints: {
            120: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1399: {
                slidesPerView: 4,
            },
            1400: {
                slidesPerView: 5,
            },
        },
    })

    var swiper8 = new Swiper('.similarSlider', {
        slidesPerView: 7,
        spaceBetween: 3,
        breakpoints: {
            120: {
                slidesPerView: 1,
            },
            310: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
            1399: {
                slidesPerView: 5,
            },
            1400: {
                slidesPerView: 6,
            },
        }, navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    })

})

$(document).ready(function() {
    $('#mainSearchInput').on('input', function() {
        // let query = $(this).val();
        const rawQuery = $(this).val();
        const query = rawQuery.trim();

        if (rawQuery.length === 0) {
            $('.search-results').empty().hide();
            return;
        }

        if (query.length === 0) {
            $('.search-results')
                .empty()
                .append('<div class="p-3">نتیجه‌ای یافت نشد.</div>')
                .show();
            return;
        }

        if (query.length > 0) {
            $.ajax({
                url: route('search'),
                method: "GET",
                data: { search: query },
                
                success: function(response) {

                    const products = response.data ?? [];

                    $('.search-results').empty(); // پاک کردن نتایج قبلی
                    $('.search-results').append('<span class="py-2 px-3 d-block fs-7">نتایج جست و جو :</span>');

                    if (products.length > 0) {
                        $.each(products, function(index, product) {
                            let productUrl = route('single_product',product.tracking_code)
                            $('.search-results').append(
                                `<div class="search-result-item position-relative border-bottom p-3">
                                    <i class="fab fa-sistrix fw-md fs-5 gray-500 d-inline-block"></i>
                                    <div class="d-inline-block ms-2">
                                        <span class="d-inline-block fw-bold ms-1">${product.title}</span>
                                        <br>
                                        <span class="d-inline-block en-title ms-1">${product.english_title}</span>
                                    </div>
                                    <a href="${productUrl}" class="stretched-link"></a>
                                </div>`
                            );
                        });
                    } else {
                        $('.search-results').append('<div class="p-3">نتیجه‌ای یافت نشد.</div>');
                    }

                    // نمایش نتایج
                    $('.search-results').show();
                }
            });
        } else {
            $('.search-results').empty(); // اگر ورودی خالی است، نتایج را پاک کنید
            $('.search-results').hide(); // پنهان کردن نتایج
        }
    });
});

