const health: number = 100;
const characterName: string = "Hornet";
const hobbies: string[] = ["Reading", "Gaming", "Hiking"];
const personalData: [string, number] = ['Hornet', 100];
const dynamicVariable : any = 'This can be anything';
const firstSkill: any = 'Dash';
const memoryLockeds: [number, string] = [1, 'Bone Bottom'];
const canDouleJump: boolean = false; 



const outputElement = document.getElementById('output');
if (outputElement) {
    outputElement.innerHTML = `
    <li><strong>Character Name:</strong> ${characterName} (Type: ${typeof characterName})</li>
    <li><strong>Health:</strong> ${health} (Type: ${typeof health})</li>
    <li><strong>Hobbies:</strong> ${hobbies.join(', ')} (Type: ${typeof hobbies})</li>
    <li><strong>Personal Data:</strong> Name - ${personalData[0]}, Health - ${personalData[1]} (Type: ${typeof personalData})</li>
    <li><strong>Dynamic Variable:</strong> ${dynamicVariable} (Type: ${typeof dynamicVariable})</li>   
    <li><strong>First Skill:</strong> ${firstSkill} (Type: ${typeof firstSkill})</li>
    <li><strong>Memory Lockeds:</strong> ID - ${memoryLockeds[0]}, Location - ${memoryLockeds[1]} (Type: ${typeof memoryLockeds})</li>
    <li><strong>Can Double Jump:</strong> ${canDouleJump} (Type: ${typeof canDouleJump})</li>
    
    `
}