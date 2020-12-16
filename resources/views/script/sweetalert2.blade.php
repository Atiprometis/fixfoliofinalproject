<script>

$("#success").click(async function() {

//     const { value: inputcourse } =  await swal ({
// title: 'เพิ่มหลักสูตร',
// input: 'text',



// });
const { value: fruit } = await Swal.fire({
title: 'เพิ่มหลักสูตร',
input: 'text',
input: 'select',
inputOptions: {
  'Fruits': {
    apples: 'Apples',
    bananas: 'Bananas',
    grapes: 'Grapes',
    oranges: 'Oranges'
  },
  'Vegetables': {
    potato: 'Potato',
    broccoli: 'Broccoli',
    carrot: 'Carrot'
  },
  'icecream': 'Ice cream'
},
inputPlaceholder: 'Select a fruit',
showCancelButton: true,

})

if (fruit) {
Swal.fire(`You selected: ${fruit}`)
}


});


</script>

<script>
  
</script>