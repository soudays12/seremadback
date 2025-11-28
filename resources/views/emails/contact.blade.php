<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message - SEREMAD</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f3f4f6; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #2563eb, #06b6d4); color: white; padding: 30px; text-align: center; }
        .logo { width: 60px; height: 60px; margin: 0 auto 15px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; }
        .content { padding: 30px; }
        .field { margin-bottom: 20px; padding: 15px; background: #f8fafc; border-radius: 8px; border-left: 4px solid #2563eb; }
        .label { font-weight: bold; color: #374151; margin-bottom: 5px; }
        .value { color: #1f2937; }
        .message-box { background: #eff6ff; border: 1px solid #dbeafe; border-radius: 8px; padding: 20px; margin-top: 10px; }
        .footer { background: #f9fafb; padding: 20px; text-align: center; color: #6b7280; font-size: 14px; border-top: 1px solid #e5e7eb; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">🧹</div>
            <h1 style="margin: 0; font-size: 24px;">SEREMAD</h1>
            <p style="margin: 10px 0 0; opacity: 0.9;">Nouveau message de contact</p>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="label">Nom complet</div>
                <div class="value">{{ $name }}</div>
            </div>
            
            <div class="field">
                <div class="label">Adresse email</div>
                <div class="value">{{ $email }}</div>
            </div>
            
            <div class="field">
                <div class="label">Ville</div>
                <div class="value">{{ $ville }}</div>
            </div>
            
            <div class="field">
                <div class="label">Code postal</div>
                <div class="value">{{ $postal }}</div>
            </div>
            
            <div class="field">
                <div class="label">Service demandé</div>
                <div class="value">{{ $option }}</div>
            </div>
            
            <div class="field">
                <div class="label">Message</div>
                <div class="message-box">{{ $user_message }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>Message envoyé depuis le site web SEREMAD</p>
            <p>{{ date('d/m/Y à H:i') }}</p>
        </div>
    </div>
</body>
</html>
