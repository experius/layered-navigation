<?php
namespace Webkul\LayeredNavigation\Block\Navigation;

class State extends \Magento\LayeredNavigation\Block\Navigation\State
{
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Webkul\LayeredNavigation\Model\Layer\Resolver $layerResolver,
		array $data = []
	) {
		parent::__construct($context, $layerResolver, $data);
    }
}