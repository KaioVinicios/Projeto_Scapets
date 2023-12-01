const largura = window.innerWidth.valueOf();
const larguraCar = $('.carrossel').outerWidth();
const animateTime = 350;
const totalItens = $('.carrossel').length;

const tamanho = {
    altura: $('.carrossel').eq(0).height(),
    largura: $('.carrossel').eq(0).width()
}

$('.carrossel').eq(0).css({
    "background-color": "black",
    "left": (largura / 2) - (tamanho.largura / 2),
    "z-index": 1
});
$('.carrossel').eq(1).css({
    "background-color": "red",
    "left": (largura * 0.9) - (tamanho.largura * 0.7),
    "width": tamanho.largura * 0.7,
    "height": tamanho.altura * 0.7,
    "z-index": 0
});
$('.carrossel').eq(2).css({
    "background-color": "green",
    "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
    "width": tamanho.largura * 0.3,
    "height": tamanho.altura * 0.3,
    "z-index": 0
});
$('.carrossel').eq(3).css({
    "background-color": "gray",
    "left": largura * 0.1,
    "width": tamanho.largura * 0.7,
    "height": tamanho.altura * 0.7,
    "z-index": 0
});

var posAtual = 0;

$('.seta2').click(function (e) {
    if (posAtual < 1) {
        posAtual = 4
    }
    if (posAtual == 4) {
        $('.carrossel').eq(0).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                console.log()
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
    } else if (posAtual == 3) {
        $('.carrossel').eq(0).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
    } else if (posAtual == 2) {
        $('.carrossel').eq(0).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
    } else if (posAtual == 1) {
        $('.carrossel').eq(0).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        posAtual = 0;
    }
    posAtual--;
});

$('.seta1').click(function (e) {
    posAtual++;
    if (posAtual == 3) {
        $('.carrossel').eq(0).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                console.log()
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
    } else if (posAtual == 2) {
        $('.carrossel').eq(0).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
    } else if (posAtual == 1) {
        $('.carrossel').eq(0).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
    } else if (posAtual == 4) {
        $('.carrossel').eq(0).animate({
            "left": (largura / 2) - (tamanho.largura / 2),
            "width": tamanho.largura,
            "height": tamanho.altura,
            "z-index": 1
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 1 })
                }
            }
        });
        $('.carrossel').eq(1).animate({
            "left": (largura * 0.9) - (tamanho.largura * 0.7),
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(2).animate({
            "left": (largura / 2) - ((tamanho.largura * 0.3) / 2),
            "width": tamanho.largura * 0.3,
            "height": tamanho.altura * 0.3,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        $('.carrossel').eq(3).animate({
            "left": largura * 0.1,
            "width": tamanho.largura * 0.7,
            "height": tamanho.altura * 0.7,
            "z-index": 0
        }, {
            duration: animateTime,
            progress: function (now, fx) {
                if (fx >= 0.2) {
                    $(this).css({ "z-index": 0 })
                }
            }
        });
        posAtual = 0;
    }
});