<main style="margin: 0px 200px 0px">
    <?= $this->Html->link('<< 戻る', ['controller' => 'toppage', 'action' => 'index']) ?>
    <h1>Y社 <?= h($storeName) ?> 店舗掲示板</h1>
    <h3>新規スレッドを作成する：</h3>
    <?= $this->Form->create($newThread) ?>
    スレッド名：
    <?= $this->Form->text('title'); ?>
    <?= $this->Form->hidden('store_id', ['default' => $id]); ?>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
    <h2 style="font-size:x-large">スレッド一覧</h2>
    <table cellpadding='0' cellspacing='0'>
        <thead>
            <tr>
                <th class='main' scope='col'><?= $this->Paginator->sort('title') ?></th>
                <th scope='col'><?= $this->Paginator->sort('created') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($threads as $thread) : ?>
                <tr>
                    <td><?= $this->Html->link(h($thread->title), ['action' => 'view', $thread->id, $thread->store_id]) ?></td>
                    <td><?= $this->Form->postLink('削除する', ['controller' => 'bulletin', 'action' => 'delete', $thread->id, $thread->store_id]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class='paginator'>
        <ul class='pagination'>
            <?= $this->Paginator->first('<<' . __('first')) ?>
            <?= $this->Paginator->prev('<' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . '>') ?>
            <?= $this->Paginator->last(__('last') . '>>') ?>
        </ul>
    </div>
</main>