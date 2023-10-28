<body>
  
  <h1>お問い合わせフォーム</h1>
  
  <form method="post" action="./store.php">
    <table>
      <tr>
        <td>メール</td>
        <td><input name="email" placeholder="メールアドレスの記入欄" required></td>
      </tr>
      <tr>
        <td>お問い合わせ内容</td>
        <td><textarea name="content" placeholder="お問い合わせ内容の記入欄" required></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit">送信</button></td>
      </tr>
    </table>
  </form>
</body>
