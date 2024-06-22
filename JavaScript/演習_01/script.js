document.write("問1");

document.write("<br>");

for(var yoko = 0; yoko < 5; yoko++){
    document.write("★");
}
document.write("<br>");


document.write("<br>" + "問2");

document.write("<br>");

// 外の for 文では、段数を管理する
for(var tate = 0; tate < 2; tate++){
    // 変数 yoko を宣言して 0 を代入する
    // 変数 yoko が 3 未満になるまで繰り返し処理を行う
    // １回の処理が終わったら、変数 yoko を１つ増やす
    for(var yoko = 0; yoko < 3; yoko++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("問3");

document.write("<br>");

// 外のfor文で段数を管理する
// 変数 tate を宣言して 0 を代入する
// 変数 tate が2未満になるまで繰り返し処理を行う
// 1回の処理が終わったら、変数 tate を1つ増やす
for(var tate = 0; tate < 2; tate++){

    // 中のfor文で☆を横に表示する
    // 変数 yoko を宣言して 0 を代入する
    // 変数 yoko が5未満になるまで繰り返し処理を行う
    // 1回の処理が終わったら、変数 yoko を1つ増やす
    for(var yoko = 0; yoko < 5; yoko++){
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br>");

document.write("問4");

document.write("<br>");

for(var tate = 0; tate < 4; tate++){
    for(var yoko = 0; yoko < 5; yoko++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");

document.write("問5" );

document.write("<br>");

for(var tate = 0; tate < 4; tate++){
    for(var yoko = 0; yoko < 3; yoko++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");

document.write("問6");

document.write("<br>");

// 外のfor文で段数を管理する
// 変数 tate を宣言して 0 を代入する
// 変数 tate が3未満になるまで繰り返し処理を行う
// 1回の処理が終わったら、変数 tate を1つ増やす
for(var tate = 0; tate < 3; tate++){

    // 中のfor文で星を横に表示する
    // 変数 yoko を宣言して 0 を代入する
    // 変数 yoko が3未満になるまで繰り返し処理を行う
    // 1回の処理が終わったら、変数 yoko を1つ増やす
    for(var yoko = 0; yoko < 3; yoko++){

        // 変数 yoko を 2 で割って余りが 0 のときに★を表示する
        // 余りが 0 以外のときに☆を表示する
        if(yoko % 2 == 0){
            document.write("★");
        }else{
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>");

document.write("問7");

document.write("<br>");

for(var tate = 0; tate < 4; tate++){
    for(var yoko = 0; yoko < 5; yoko++){
        if(yoko % 2 == 0){
            document.write("★");
        }else{
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>");

document.write("問8");

document.write("<br>");

// 外のfor文で段数を管理する
// 変数 tate を宣言して 0 を代入する
// 変数 tate が5未満になるまで繰り返し処理を行う
// 1回の処理が終わったら、変数 tate を1つ増やす
for(var tate = 0; tate < 5; tate++){

    // 中のfor文で★を横に表示する
    // 変数 yoko を宣言して 0 を代入する
    // 変数 yoko が 変数 tate 以下になるまで繰り返し処理を行う
    // 1回の処理が終わったら、変数 yoko を1つ増やす
    // 変数 yoko の処理が tate 以下になったら外の for文に戻る
    for(var yoko = 0; yoko <= tate; yoko++){
        document.write("★");
    }
    document.write("<br>");   
}