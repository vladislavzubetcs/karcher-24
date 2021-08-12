<?php

class Pagination
{
    private $max = 5;
    private $current_page;
    private $total;
    private $limit;

    public function __construct($total, $currentPage, $limit)
    {
        $this->total = $total;
        $this->limit = $limit;
        $this->amount = $this->amount();
        $this->setCurrentPage($currentPage);
    }

    public function get()
    {
        $links = null;
        $limits = $this->limits();
        
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            if ($page == $this->current_page) {
                $links .= '<li class="page-item active"><a class="page-link" href="#" data-abc="true">' . $page . '</a></li>';
            } else {
                $links .= $this->generateHtml($page);
            }
        }

        if (!is_null($links)) {
            if ($this->current_page > 1)
                $links = $this->generateHtml(1, '<i class="icon-arrow-left"></i>') . $links;

            if ($this->current_page < $this->amount)
                $links .= $this->generateHtml($this->amount, '<i class="icon-arrow-right"></i>');
        }

        return $links;
    }

    private function generateHtml($page, $text = null)
    {
        if (!$text)
            $text = $page;

        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
        return '<li class="page-item"><a class="page-link" data-abc="true" href="/' . $page . '">' . $text . '</a></li>';
    }

    private function limits()
    {
        $left = $this->current_page - round($this->max / 2);
        
        $start = $left > 0 ? $left : 1;

        if ($start + $this->max <= $this->amount) {
            $end = $start > 1 ? $start + $this->max : $this->max;
        } else {
            $end = $this->amount;

            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }

        return
                array($start, $end);
    }

    private function setCurrentPage($currentPage)
    {
        $this->current_page = $currentPage;

        if ($this->current_page > 0) {
            if ($this->current_page > $this->amount)
                $this->current_page = $this->amount;
        } else
            $this->current_page = 1;
    }

    private function amount()
    {
        return ceil($this->total / $this->limit);
    }

}