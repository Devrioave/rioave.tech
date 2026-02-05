<?php
// 1. A Lógica deve vir ANTES de qualquer HTML ou include
session_start();

// Se o usuário já estiver logado, manda direto pro Dashboard
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}

$pageTitle = "Login | Rio Ave Tech";
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Credenciais fixas
    if ($email === 'admin@rioave.com.br' && $senha === 'Pedro123') {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_name'] = 'Admin Rio Ave';
        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "E-mail ou senha incorretos.";
    }
}

// 2. Inclui o cabeçalho visual
include 'includes/header.php'; 
?>

<section class="min-h-screen flex items-center justify-center bg-[#0b1120] relative overflow-hidden pt-20">
    <div class="absolute top-[-10%] right-[-5%] w-96 h-96 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-96 h-96 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 w-full max-w-sm p-8 bg-white/5 border border-white/10 rounded-3xl backdrop-blur-md shadow-2xl reveal active">
        
        <div class="text-center mb-10">
            <img src="style/img/logo.png" 
                 alt="Rio Ave" 
                 class="h-14 mx-auto mb-6 brightness-0 invert opacity-90">
            
            <p class="text-gray-500 text-[10px] tracking-[0.2em] uppercase">Área Exclusiva para membros</p>
        </div>

        <?php if($erro): ?>
            <div class="mb-6 p-3 rounded bg-red-500/10 border border-red-500/20 text-red-400 text-xs text-center font-bold tracking-wide">
                <?php echo $erro; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" class="space-y-5">
            <div>
                <label class="block text-gray-400 text-[10px] font-bold uppercase tracking-widest mb-2">E-mail</label>
                <input type="email" name="email" required placeholder="seu@email.com"
                       class="w-full bg-dark/50 border border-white/10 rounded-lg px-4 py-3 text-white text-sm placeholder-gray-600 focus:outline-none focus:border-primary/50 focus:ring-1 focus:ring-primary/50 transition-all">
            </div>

            <div>
                <label class="block text-gray-400 text-[10px] font-bold uppercase tracking-widest mb-2">Senha</label>
                <input type="password" name="senha" required placeholder="••••••••"
                       class="w-full bg-dark/50 border border-white/10 rounded-lg px-4 py-3 text-white text-sm placeholder-gray-600 focus:outline-none focus:border-primary/50 focus:ring-1 focus:ring-primary/50 transition-all">
            </div>

            <button type="submit" 
                    class="w-full bg-primary text-dark font-bold uppercase tracking-widest text-xs py-3.5 rounded-lg hover:bg-white hover:scale-[1.02] transition-all duration-300 shadow-[0_0_15px_rgba(34,211,238,0.2)]">
                Entrar
            </button>
        </form>
        
    </div>
</section>

<?php include 'includes/footer.php'; ?>