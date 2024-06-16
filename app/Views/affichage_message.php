<div class="messages-section">
    <h3>Messages reçus</h3>
    <?php if (isset($messages) && !empty($messages)): ?>
        <ul>
        <?php foreach ($messages as $message): ?>
            <li>
                <strong>De:</strong> <?= esc($message['prenom']) ?> <?= esc($message['nom']) ?> <br>
                <strong>Email:</strong> <?= esc($message['email']) ?> <br>
                <strong>Message:</strong> <?= esc($message['message']) ?>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun message reçu pour le moment.</p>
    <?php endif; ?>
</div>
