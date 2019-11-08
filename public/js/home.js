$(".cakes-row")
.not(".slick-intialized")
.slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:".cakes-container .slider-btn .prev",
    nextArrow:".cakes-container .slider-btn .next",
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '5px'
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }

    ]
});

$(".bread-row")
.not(".slick-intialized")
.slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:".bread-container .slider-btn .prev",
    nextArrow:".bread-container .slider-btn .next",
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '5px'
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }

    ]
});

  var count;

  function starmark(item)
    {
        count=item.id[0];
        sessionStorage.starRating = count;
        var subid= item.id.substring(1);
        for(var i=0;i<5;i++)
        {
            if(i<count)
                {
                document.getElementById((i+1)+subid).style.color="orange";
                }
            else
                {
                document.getElementById((i+1)+subid).style.color="white";
                }
        }

    }