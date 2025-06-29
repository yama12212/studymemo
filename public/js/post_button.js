document.addEventListener('DOMContentLoaded', function() {
  const textarea = document.getElementById('postFormText');
  const textRedbtn = document.getElementById('makeTextRed');

  textRedbtn.addEventListener('click', () => {
    const start = textarea.selectionStart;
    const end = textarea.selectionEnd;
    const selectedText = textarea.value.substring(start, end);

    if (selectedText) {
      const beforeText = textarea.value.substring(0, start);
      const afterText = textarea.value.substring(end);

      const newText = beforeText + '[red]' + selectedText + '[/red]' + afterText;
      textarea.value = newText;
    } else {
      alert('赤文字にしたいテキストを選択してください');
    }
  });
})
