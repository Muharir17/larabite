<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ConfirmationModal extends Component
{
    public $show = false;
    public $title = '';
    public $message = '';
    public $confirmText = '';
    public $cancelText = '';
    public $confirmAction = '';
    public $icon = 'warning'; // warning, danger, info, success

    protected $listeners = ['showConfirmation'];

    public function showConfirmation($data)
    {
        $this->show = true;
        $this->title = $data['title'] ?? '';
        $this->message = $data['message'] ?? '';
        $this->confirmText = $data['confirmText'] ?? __('auth.logout_yes');
        $this->cancelText = $data['cancelText'] ?? __('auth.logout_cancel');
        $this->confirmAction = $data['confirmAction'] ?? '';
        $this->icon = $data['icon'] ?? 'warning';
    }

    public function confirm()
    {
        if ($this->confirmAction) {
            $this->dispatch($this->confirmAction);
        }
        $this->close();
    }

    public function close()
    {
        $this->show = false;
        $this->reset(['title', 'message', 'confirmText', 'cancelText', 'confirmAction', 'icon']);
    }

    public function render()
    {
        return view('livewire.components.confirmation-modal');
    }
}
