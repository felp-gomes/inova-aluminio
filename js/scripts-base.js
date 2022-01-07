//Inicialização Jquery
$(function () {
  $('.js_logo').css('cursor', 'pointer')

  //Logo voltar a home
  $('.js_logo').on('click', function () {
    window.location.href = 'index.php'
  })
})

$(function () {
  // Marca a pagina atual no menu
  var endereco = location.pathname
  var array = endereco.split('/')
  var ultimo = array.pop()
  var isola = ultimo.split('.')
  var clicado = isola[0]

  if (clicado === '') {
    clicado = 'index'
  }

  $('.navegation')
    .find('li.' + clicado)
    .addClass('menu_ativo')
  // FIM - Marca a pagina atual no menu
})

$(function () {
  // Marca a pagina atual no menu
  var endereco = location.pathname
  var array = endereco.split('/')
  var ultimo = array.pop()
  var isola = ultimo.split('.')
  var clicado = isola[0]

  if (clicado === '') {
    clicado = 'index'
  }

  $('.promo_navigator')
    .find('li.' + clicado)
    .addClass('menu_ativo')
  // FIM - Marca a pagina atual no menu
})

$(function () {
  //Botao menu mobile
  var tamanho = $(window).width()
  if (tamanho < 750) {
    $('.main_navigator').slideUp()
  }
  $('.btn-mobile').on('click', function (evt) {
    evt.preventDefault()
    $('.main_navigator').slideToggle()
  })

  $('.main_navigator a[href^="#"]').on('click', function (e) {
    e.preventDefault()
    var id = $(this).attr('href'),
      targetOffset = $(id).offset().top

    $('html, body').animate(
      {
        scrollTop: targetOffset,
      },
      900
    )
  })
})
