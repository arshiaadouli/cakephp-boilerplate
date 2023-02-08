<style>
    .image-login{
        width: 500px;
        height: 500px
    }

    body{
        background-color: gray;
    }


</style>
<div style='padding:80px; background-color: gray; width:100%';>

    <div class="d-lg-flex flex-lg-row justify-content-around" style="padding:20px; border-radius: 10px; background-color: white">
        <div class="users form p-5">
        <?= $this->Flash->render() ?>
        <h3>Login</h3>
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Please enter your username and password') ?></legend>
            <div class="mb-5">
                <?= $this->Form->control('email', ['required' => true]) ?>
            </div>
            <div class='mb-5'>
                <?= $this->Form->control('password', ['required' => true]) ?>
            </div>
        </fieldset>
        <?= $this->Form->submit(__('Login')); ?>
        <?= $this->Form->end() ?>
    </div>

    <div class='p-5 image-login'>
        <?= $this->Html->link($this->Html->image("login-vector.jpg", array("alt" => "alt-tag")),"#", array('class' => 'login-image', 'escape' => false)) ?>
    </div>
</div>
</div>
