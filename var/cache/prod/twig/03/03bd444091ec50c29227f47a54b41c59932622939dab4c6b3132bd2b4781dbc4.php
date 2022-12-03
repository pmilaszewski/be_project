<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig */
class __TwigTemplate_a8db89843ea2bc1dd966dfb8dfa717745434e9e6387ac908deb87e7442f8a316 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'payment_preferences_form' => [$this, 'block_payment_preferences_form'],
            'payment_modules_currency_restrictions' => [$this, 'block_payment_modules_currency_restrictions'],
            'payment_modules_group_restrictions' => [$this, 'block_payment_modules_group_restrictions'],
            'payment_modules_country_restrictions' => [$this, 'block_payment_modules_country_restrictions'],
            'payment_modules_carrier_restrictions' => [$this, 'block_payment_modules_carrier_restrictions'],
            'payment_preferences_block_rest' => [$this, 'block_payment_preferences_block_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->displayBlock('payment_preferences_form', $context, $blocks);
    }

    public function block_payment_preferences_form($context, array $blocks = [])
    {
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? null), 'form_start');
        // line 29
        $this->displayBlock('payment_modules_currency_restrictions', $context, $blocks);
        // line 56
        $this->displayBlock('payment_modules_group_restrictions', $context, $blocks);
        // line 83
        $this->displayBlock('payment_modules_country_restrictions', $context, $blocks);
        // line 110
        $this->displayBlock('payment_modules_carrier_restrictions', $context, $blocks);
        // line 136
        $this->displayBlock('payment_preferences_block_rest', $context, $blocks);
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? null), 'form_end');
    }

    // line 29
    public function block_payment_modules_currency_restrictions($context, array $blocks = [])
    {
        // line 30
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">euro_symbol</i>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the currency, or currencies, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", []), "currency_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>";
    }

    // line 56
    public function block_payment_modules_group_restrictions($context, array $blocks = [])
    {
        // line 57
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">group</i>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the customer group(s), for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", []), "group_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>";
    }

    // line 83
    public function block_payment_modules_country_restrictions($context, array $blocks = [])
    {
        // line 84
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">public</i>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the country, or countries, in which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", []), "country_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>";
    }

    // line 110
    public function block_payment_modules_carrier_restrictions($context, array $blocks = [])
    {
        // line 111
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please mark each checkbox for the carrier, or carrier, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>
        <div class=\"form-group\">";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["paymentPreferencesForm"] ?? null), "payment_module_preferences", []), "carrier_restrictions", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>";
    }

    // line 136
    public function block_payment_preferences_block_rest($context, array $blocks = [])
    {
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["paymentPreferencesForm"] ?? null), 'rest');
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 137,  209 => 136,  200 => 129,  192 => 123,  186 => 119,  179 => 114,  175 => 111,  172 => 110,  163 => 103,  155 => 97,  148 => 92,  141 => 87,  137 => 84,  134 => 83,  125 => 76,  117 => 70,  110 => 65,  103 => 60,  99 => 57,  96 => 56,  87 => 49,  79 => 43,  72 => 38,  65 => 33,  61 => 30,  58 => 29,  54 => 140,  52 => 136,  50 => 110,  48 => 83,  46 => 56,  44 => 29,  42 => 28,  36 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "/var/www/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig");
    }
}
