document.write("問1" + "<br>");

// 関数名 menseki の引数を hankei と宣言する
function menseki(hankei){

    // 戻り値に面積を求める式を書く
    return ((hankei*hankei)*3.14) + "㎠" + "<br>";
}

document.write(menseki(5));

document.write(menseki(7));

document.write(menseki(10));


document.write("<br>" + "問2" + "<br>");

function groupPrice(otona,kodomo,group){
    return group + "グループの合計金額" + (otona * 500 + kodomo * 200) + "円です。" + "<br>";
}

document.write(groupPrice(2,4,"A"));

document.write(groupPrice(1,5,"B"));

document.write(groupPrice(3,7,"C"));