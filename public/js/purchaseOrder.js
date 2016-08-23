entityId = 0;
product = [];
available = 0;
total = 0;
token = jQuery('#token').val();

jQuery('select').select2();

jQuery('select').change(function () {
  entityId = jQuery(this).val();
  jQuery('#1').removeClass('hidden');
});

jQuery('.person_business').click(function (e) {
  entity = jQuery(this).text();
  if (entity == 'Persona') {
    jQuery('#person').parent().removeClass();
    jQuery('#business').remove();
  } else if (entity == 'Empresa') {
    jQuery('#business').parent().removeClass();
    jQuery('#person').remove();
  }
});

jQuery('.add').click(function () {

  availableText = jQuery(this).parent().parent().children('.available').text();
  quantity = jQuery(this).parent().parent().children().children('.quantity').val();

  if (parseInt(availableText) < parseInt(quantity)) {
    alert('Cantidad no disponible');
    return false;
  }

  if (quantity > 0) {
    jQuery(this).parent().parent().clone().appendTo('#add');

    if (availableText == quantity) {
      jQuery(this).parent().parent().remove();
    }
    total = parseInt(jQuery(this).parent().parent().children('.cost').text()) * parseInt(quantity);

    available = availableText - quantity;

    productId = jQuery(this).parent().parent().children('.id').text();
    jQuery(this).parent().parent().children('.available').text(available);
    jQuery(this).parent().parent().children().children('.quantity').attr('max', available);
    jQuery('#add').children('tr').children('td').children('button').remove('.add');
    jQuery('#add').children('tr').children().remove('.available');
    jQuery('#add').children('tr').children('td').last().remove();
    jQuery('#add').children('tr').children('td').children('input').attr('readonly', 'readonly');

    jQuery('#quantityProduct').text(parseInt(jQuery('#quantityProduct').text()) + parseInt(quantity));
    jQuery('#total').text(parseInt(jQuery('#total').text()) + total);

    if (product[productId]) {
      product[productId][0] = parseInt(product[productId][0]) + parseInt(quantity);
      product[productId][1] = parseInt(product[productId][1]) + parseInt(total);
      product[productId][2] = available;
    } else {
      product[productId] = [quantity, total, available];
    }

    jQuery('.two').removeClass('hidden');
    jQuery('#add')[0].scrollIntoView();
  }
});

jQuery('.save').click(function () {
  $.ajax({
    url: '/inventario/create',
    type: 'POST',
    data: {
      'product': product,
      'entityId': entityId,
      'available': available,
      '_token': token,
    },
    success: function (e) {
      jQuery('body').html(e);
    }
  });
});