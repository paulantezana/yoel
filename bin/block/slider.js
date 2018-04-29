// let subTitleWrite = document.querySelector('#slider__subTitle span');
// let subTitles = [
//     'de Escritorio'.split(''),
//     'Web'.split(''),
//     'Móviles'.split(''),
// ];

// let writeSubTitles = ()=>{
//     let i = 0, x = 0, z = 0, limit = 25;
//     setInterval(()=>{
//         if (z <= limit){
//             // Pause and clear content in span
//             (limit - 1 === z) ? subTitleWrite.innerHTML = '­' : '';
//             z++;
//         }else{
//             subTitleWrite.innerHTML += subTitles[i][x]; // print for letter
//             x++;
//             if (x === subTitles[i].length){
//                 i++;
//                 x = 0; z = 0;  // reset values index
//                 // reset values  (if i === subTitles.length) // where all print words
//                 if (i === subTitles.length){ i = 0; x = 0; }
//             }
//         }
//     },50)
// };

// writeSubTitles();
