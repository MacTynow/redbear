simpleCart({
  checkout: {
    type: "PayPal",
    email: "charles.martinot@gmail.com"
  }
});
            
$(function()
{
    $('#cartbutton').popover({
      html: true,
      content: function() {
        return $('#cart_content_wrapper').html();
      }
    });
});
