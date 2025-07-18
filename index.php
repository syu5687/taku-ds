<?php
// Cloud Run + Apache + PHP 動作確認用のテストファイルaaaa

// Cloud Run のポート番号などの環境変数も出力
$port = getenv('PORT') ?: '不明';
$db_name = getenv('DB_NAME') ?: '未設定';

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Cloud Run 動作テスト</title>
  <style>
	body {
	  font-family: sans-serif;
	  padding: 2rem;
	  background-color: #f5f5f5;
	}
	h1 {
	  color: #2c3e50;
	}
	pre {
	  background: #fff;
	  padding: 1rem;
	  border: 1px solid #ddd;
	}
  </style>
</head>
<body>
  <h1>✅ Cloud Run 動作テスト</h1>
  <p>このページは Cloud Run + Apache + PHP が正しく動作していることを確認するためのテストです。</p>
  <span>....</span>
  <h2>環境変数</h2>
  <pre>
PORT: <?= htmlspecialchars($port) ?>

DB_NAME: <?= htmlspecialchars($db_name) ?>

PHP VERSION: <?= phpversion() ?>
  </pre>

  <h2>PHP情報（抜粋）</h2>
  <pre>
<?= phpinfo(INFO_CONFIGURATION); ?>
  </pre>
</body>
</html>
