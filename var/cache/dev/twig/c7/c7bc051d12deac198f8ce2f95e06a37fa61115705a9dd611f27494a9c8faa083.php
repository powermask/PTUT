<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b581664d64389c0756095ac766011c0f162e181e80e7e37a7984e965b4d5132b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d45fa45ebfac29ca65f68bd170031bf5bacb8d8949b1fec7332bc4f1d5b90989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45fa45ebfac29ca65f68bd170031bf5bacb8d8949b1fec7332bc4f1d5b90989->enter($__internal_d45fa45ebfac29ca65f68bd170031bf5bacb8d8949b1fec7332bc4f1d5b90989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_07f37a9c0b490249957f1c508fe39c54caca9ff20d4931caabcc82eed09ef9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f37a9c0b490249957f1c508fe39c54caca9ff20d4931caabcc82eed09ef9f5->enter($__internal_07f37a9c0b490249957f1c508fe39c54caca9ff20d4931caabcc82eed09ef9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d45fa45ebfac29ca65f68bd170031bf5bacb8d8949b1fec7332bc4f1d5b90989->leave($__internal_d45fa45ebfac29ca65f68bd170031bf5bacb8d8949b1fec7332bc4f1d5b90989_prof);

        
        $__internal_07f37a9c0b490249957f1c508fe39c54caca9ff20d4931caabcc82eed09ef9f5->leave($__internal_07f37a9c0b490249957f1c508fe39c54caca9ff20d4931caabcc82eed09ef9f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
