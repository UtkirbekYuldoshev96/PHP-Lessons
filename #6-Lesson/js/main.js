// let loptop = {
//     cpu: 'i9',
//     ram: '64GB',
//     stoge: {
//         type: 'SSD',
//         capocity: '1TB',
//     },
//     screnSize: 17,
//     brand: "Lenove",
//     powerOn: function () {
//         console.log('on');
//     }
// }
// console.log(loptop);


const creteLaptop = (cpu, ram, stroge, screnSize, brand) => {
    return {
        cpu,
        ram,
        stroge,
        screnSize,
        brand,
        powerOn(){
            console.log('on');
        }
    }
};
let laptop = creteLaptop('i9','64GB', {type: 'SSD', capciyt: '1TB'}, 17, 'Lenove');
console.log(laptop);