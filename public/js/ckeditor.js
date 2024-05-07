
$(function () {

  CKEDITOR.replace("ckeditor", {
      uiColor: "#EEEEEE", // UIの色を指定します
      height: 800, // エディタの高さを指定します

      // スペルチェック機能OFF
      scayt_autoStartup: false,

      // Enterを押した際に改行タグを挿入
      enterMode: CKEDITOR.ENTER_BR,

      // Shift+Enterを押した際に段落タグを挿入
      shiftEnterMode: CKEDITOR.ENTER_P,

      // idやclassを指定可能にする
      allowedContent: true,

      // ファイルマネージャー関連
      filebrowserImageBrowseUrl: "/laravel-filemanager?type=Images",
      filebrowserImageUploadUrl:
          "/laravel-filemanager/upload?type=Images&_token=",
      filebrowserBrowseUrl: "/laravel-filemanager?type=Files",
      filebrowserUploadUrl: "/laravel-filemanager/upload?type=Files&_token=",

      // preコード挿入時
      format_pre: {
          element: "pre",
          attributes: {
              class: "code",
          },
      },
      // タグのパンくずリストを削除
      removePlugins: "elementspath",

      // webからコピペした際でもプレーンテキストを貼り付けるようにする
      forcePasteAsPlainText: true,

      // 自動で空白を挿入しないようにする
      fillEmptyBlocks: false,

      // タブの入力を無効にする
      tabSpaces: 0,
  });
});
